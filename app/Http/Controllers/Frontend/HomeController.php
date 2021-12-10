<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\Widget;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Models\Skill;
use App\Models\SkillPosition;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $newsletterValidationRules = [
        'email' => 'required|email|unique:newsletter,email,NULL,id,deleted_at,NULL'
    ];
    protected $homeRepository = "";

    protected   $loginValidationRules =
    [
        'email' => 'required|email',
        'password' => "required",
    ];

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function userDashboard()
    {
        $data['newslettervalidator'] = JsValidator::make($this->newsletterValidationRules);
        $userData = $this->homeRepository->UserData();
        $data['widget'] = $userData['widget'];
        $data['skill'] = $userData['skill'];
        return view('frontend.dashboard', $data);
    }

    public function getAjaxSkill(Request $request)
    {
        $data = $this->homeRepository->getSkillPositionData($request);
        return response()->json(["success" => true, "skillData" => $data]);
    }

    public function ajaxDataInsert(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->Code, //This Code coming from ajax request
            'details' => $request->Chief, //This Chief coming from ajax request
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }

    public function addNewsletter(Request $request)
    {

        $validation = Validator::make($request->all(), $this->newsletterValidationRules);

        if ($validation->fails()) {

            return redirect()->back()->withErrors($validation->errors());
        }
        $instArray = $this->homeRepository->storeNewsLater($request);
        if ($instArray) {
            Session::flash('success', 'Successfully Inserted');
            return redirect('/');
        }
    }
    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(), $this->loginValidationRules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }
        $user = $this->homeRepository->usersLogin($request);
        if ($user) {
            return response()->json(['success' => true, 'message' => 'Connexion réussie', 'user' => Auth::guard('web')->user()->user_type]);
        }
        return response()->json(['success' => false, 'errors' => array('invalid' => 'Email et le mot de passe sont erronés')]);
    }
}
