<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Http\Request;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use PDF;

class RegistrationController extends Controller
{
    protected $registrationRepository = "";
    protected $forgotPasswordValidator = [

        'email' => 'required|email|exists:users,email',

    ];

    public function __construct(RegistrationRepositoryInterface $registrationRepository)
    {
        $this->registrationRepository = $registrationRepository;
    }

    public function index()
    {
        $data['forgotPasswordValidator'] = JsValidator::make($this->forgotPasswordValidator);
        return view('frontend/registration', $data);
    }

    public function saveRegistration(Request $request)
    {

        Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|digits:10',
            'accept_condition' => 'required',
            'accept_sensitive_data' => 'required',
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
            $data['updateUser'] = $update;
            Session::flash('success','Your Email has been verified');
            return view('frontend.candidate.candidate-profile-step',$data);
            // Session::flash('success','Your Email has been verified');
            // return redirect()->route('registration');
        }else{
            Session::flash('error','Your e-mail is already verified. You can now login.');
            return redirect()->route('registration');
        }
    }

    public function accountCreatedForm()
    {

        return view('frontend.email-template.accountcreate');
    }

    public function candidateProfileStep(Request $request,$id)
    {
        $data = $this->registrationRepository->updateCandidateProfileStep($request,$id);
        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Update'
            ]);
        }   
    }

    public function candidateDownloadResume($userId)
    {
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y')
        // ];
        // $pdf = PDF::loadView('frontend.candidate.resume-download', $data);
    
        // return $pdf->download('itsolutionstuff.pdf');
         $data = $this->registrationRepository->downalodStepResume($userId);
        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'CV download successfully'
            ]);
        }  
    }
   
}
