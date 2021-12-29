<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\RegistrationRepositoryInterface;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JsValidator;
use App\Http\Traits\ImageuploadTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use PDF;

class RegistrationController extends Controller
{
    use ImageuploadTrait;
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
            'first_name' => 'required|string|max:25|regex:/^([^0-9]*)$/',
            'last_name' => 'required|string|max:25|regex:/^([^0-9]*)$/',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required|digits:10',
            'terms' => 'required',
            'terms' => 'required',
        ])->validate();

        $data = $this->registrationRepository->createRegistration($request);
        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Registered Sucessfully'
            ]);
        }
    }

    

    public function getEmailVerify($email)
    {
        $update =  $this->registrationRepository->verifyEmail($email);
        if ($update) {
            $data['updateUser'] = $update;
            Session::flash('success', 'Your Email has been verified');
            return view('frontend.candidate.candidate-profile-step', $data);
            // Session::flash('success','Your Email has been verified');
            // return redirect()->route('registration');
        } else {
            Session::flash('error', 'Your e-mail is already verified. You can now login.');
            return redirect()->route('registration');
        }
    }

    public function accountCreatedForm()
    {

        return view('frontend.email-template.accountcreate');
    }

    public function candidateProfileStep(Request $request, $id)
    {
        $data = $this->registrationRepository->updateCandidateProfileStep($request, $id);
        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Update'
            ]);
        }
    }

    public function candidateDownloadResume($userId)
    {
        return $this->registrationRepository->downalodStepResume($userId);
    }

    public function getWelcomePage($id)
    {
        return view('frontend.candidate.candidate-welcome-step', ["id" => $id]);
    }

    public function candidateProfileLogin($userid)
    {
        $user = $this->registrationRepository->directCandidateLogin($userid);
        if ($user) {
            Session::flash('success', 'Login Successfully');
            return redirect()->route('mycandidate-profile');
        } else {
            Session::flash('success', 'Somthing went wrong');
            return redirect()->back();
        }
    }
    public function uploadCv(Request $request)
    {
        $userId=request('editid');
        if ($request->file('cv')) {
            $choose_image = $this->uploadImage($request->file('cv'), 'usercv');
            $updateData=array('cv'=>$choose_image);
            User::where('id',$userId)->update($updateData);
        }
        return redirect('candidate/welcome/'.$userId);
    }

    
}
