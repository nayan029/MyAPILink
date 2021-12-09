<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Http\Request;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class RegistrationController extends Controller
{
    protected $registrationRepository = "";
   

    public function __construct(RegistrationRepositoryInterface $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }

    public function index()
    {

        return view('frontend/registration');
    }

    public function saveRegistration(Request $request)
    {

        Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|digits:10',
            'customCheck1' => 'required',
            'customCheck2' => 'required',
        ])->validate();

        $data = $this->registrationRepository->createRegistration($request);
        if ($data) {
            return response()->json([
                'status' => true,
                'msg' => 'Successfully Created'
            ]);
        }
    }

    public function getEmailVerify($email){
        $update =  $this->registrationRepository->verifyEmail($email);
        if($update){
            Session::flash('success','Your Email has been verified');
            return redirect()->route('registration');
        }else{
            Session::flash('error','Your e-mail is already verified. You can now login.');
            return redirect()->route('registration');
        }
    }

    public function accountCreatedForm()
    {

        return view('frontend.email-template.accountcreate');
    }
   
}
