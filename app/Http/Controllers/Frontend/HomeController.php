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
        return redirect()->route('login');
    }

    public function userDashboard()
    {
        $data['newslettervalidator'] = JsValidator::make($this->newsletterValidationRules);
        $data['widget'] = Widget::get();
        $data['skill'] = Skill::get();
        return view('frontend.dashboard', $data);
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
        $instArray = array(
            'email' => request('email'),
            'created_at' => date('Y-m-d H:i:s'),
        );
        $inasert = new Newsletter($instArray);
        $inasert->save();

        //   ---------------
        session()->flash('message-type', 'success');
        session()->flash('message', 'Add Newsletter successfully');
        return redirect('/');
    }
    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(), $this->loginValidationRules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }
        $user=Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'deleted_at' => NULL,'verify_email' =>'accept']);
        if($user) {

            return response()->json(['success' => true, 'message' => 'Connexion réussie','user'=>Auth::guard('web')->user()->user_type]);
        }
        return response()->json(['success' => false, 'errors' => array('invalid' => 'Email et le mot de passe sont erronés')]);
    }
}
