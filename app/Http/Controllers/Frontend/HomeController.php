<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\Skill;
use App\Models\Widget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\HomeRepositoryInterface;

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
    protected $forgotPasswordValidator = [

        'email' => 'required|email|exists:users,email',

    ];
    protected $resetvalidationrules = [
        'password' => 'required|min:8',
        'confirm_password' => 'required|same:password',
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
        $data['forgotPasswordValidator'] = JsValidator::make($this->forgotPasswordValidator);
        $data['widget'] = Widget::get();
        $data['skill'] = Skill::get();
        
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
    public function forgotPassword(Request $request)
    {

        $validator = Validator::make($request->all(), $this->forgotPasswordValidator);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }
      
        $forgotdata = $this->homeRepository->storePassword($request);
        if ($forgotdata) {
            Session::flash('success', 'Votre lien de réinitialisation de mot de passe est envoyé');
            return redirect()->back();
        }
        
    }
    public function resetPassword($token)
    {
        $data['validator'] = JsValidator::make($this->resetvalidationrules);
        return view('frontend.forgot.reset-password', ['token' => $token], $data);
    }
    
    public function updatePassword(Request $request)
    {
        $validation = Validator::make($request->all(), $this->resetvalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $resetdata = $this->homeRepository->updatePassword($request);

        if ($resetdata == true) {
            Session::flash('success', 'Le mot de passe a été changé avec succès');
            return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
    }

    
}
