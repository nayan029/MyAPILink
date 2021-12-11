<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\User;
use App\Models\Skill;
use App\Models\Widget;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\SkillPosition;
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

        return view('frontend.dashboard', $data);
    }

    public function getAjaxSkill(Request $request)
    {
        $data = Skill::with('positions')->where('id', $request->id)->get();
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
        $user = Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'deleted_at' => NULL]);
        if ($user) {


            if (auth()->guard('web')->user()->verify_email != 'accept') {

                Auth::guard('web')->logout();

                return response()->json(['success' => false, 'errors' => array('invalid' => "Votre compte sous la vérification s'il vous plaît vérifier le courrier.")]);
            } else {
                $request->session()->regenerate();
                return response()->json(['success' => true, 'message' => 'Connexion réussie', 'user' => Auth::guard('web')->user()->user_type]);
            }
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
