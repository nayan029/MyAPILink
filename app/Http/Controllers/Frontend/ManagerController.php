<?php

namespace App\Http\Controllers\frontend;

use JsValidator;
use Carbon\Carbon;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\ManagerRepositoryInterface;
use App\Interfaces\ApplyJobRepositoryInterface;

class ManagerController extends Controller
{
    protected $managerRepository = "";
    protected   $updatevalidationrules =
    [
        'civility' => 'required|max:5',
        'firstname' => "required|max:25",
        'lastname' => "required|max:25",
        'roles' => "required",

    ];
    protected   $imageValidationRules =
    [

        'image' => 'required|mimes:jpeg,png,jpg|max:2048',

    ];
    protected   $passwordValidationRules =
    [
        'password' => 'required|min:8',
        'confirm_password' => "required|same:password",

    ];
    protected $applyJobRepository = "";

    public function __construct(ManagerRepositoryInterface $managerRepository, ApplyJobRepositoryInterface $applyJobRepository)
    {
        $this->managerRepository = $managerRepository;
        $this->applyJobRepository = $applyJobRepository;
    }

    public function index()
    {
        return view('frontend.manager.create');
    }

    public function storeData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'civility' => 'required|regex:/^([^0-9]*)$/',
            'firstname' => 'required|max:25|regex:/^([^0-9]*)$/',
            'lastname' => 'required|max:25|regex:/^([^0-9]*)$/',
            'phone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|confirmed|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'represent' => 'required',
            'organization' => 'required|max:75',
            'number_of_establishments' => 'required|numeric|digits:5',
            'address' => 'required',
            'postal_code' => 'required|digits:5',
            'city' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $storeProfile = $this->managerRepository->StoreProfile($request);

        if ($storeProfile) {

            return response()->json(
                [
                    'success' => true,
                    'message' => 'Registered Sucessfully'
                ]
            );
        }
    }


    public function profile()
    {
        $this->updatevalidationrules['email'] = "required|email|unique:users,email," . auth()->guard('web')->user()->id . ",id,deleted_at,NULL";

        $id = auth()->guard('web')->user()->id;
        $userType = auth()->guard('web')->user()->user_type;
        $data['validator'] = JsValidator::make($this->updatevalidationrules);
        $data['myJobList'] = Job::where('user_id', $id)->paginate(10);
        $data['remaining'] = Job::where('created_at', '>=', Carbon::now())->get();
        $data['deleted'] = Job::onlyTrashed()->get();
        $data['myEstablishmentList'] = Establishment::where('user_id', $id)->get();
        if ($userType == 2) {
            return view('frontend.manager.manager-profile', $data);
        } else {
            return redirect()->route('mycandidate-profile');
        }
    }

    public function updateProfile(Request $request)
    {

        $this->updatevalidationrules['email'] = "required|email|unique:users,email," . auth()->guard('web')->user()->id . ",id,deleted_at,NULL";

        $validation = Validator::make($request->all(), $this->updatevalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $data = $this->managerRepository->updateProfile($request);
        Session::flash('success', 'Successfully Updated');
        return redirect()->back();
    }

    public function accountSetting()
    {

        return view('frontend.manager.account_setting');
    }

    public function updatePassowrd(Request $request)
    {
        $validator = Validator::make($request->all(), $this->passwordValidationRules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $update = $this->managerRepository->changePassword($request);

        if ($update) {

            return response()->json(['success' => true, 'message' => 'Successfully Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }

    public function updateEmail(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email,' . auth()->guard('web')->user()->id . ',id,deleted_at,NULL',
            'confirm_email' => "required|email|same:email",
        ]);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $update = $this->managerRepository->changeEmail($request);

        if ($update) {

            return response()->json(['success' => true, 'message' => 'Successfully Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }
    public function updateNotificationsFlag(Request $request)
    {

        $update = $this->managerRepository->changeNotificationFlag($request);

        if ($update) {

            return response()->json(['success' => true, 'message' => 'Successfully Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }

    public function updateDeleteAccountFlag(Request $request)
    {

        $update = $this->managerRepository->changeDeleteAccountFlag($request);

        if ($update) {

            return response()->json(['success' => true, 'message' => 'Successfully Updated']);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }
    public function chatIndex()
    {

        $data['validator'] = JsValidator::make($this->imageValidationRules);
        $data['userList'] = $this->applyJobRepository->chatUserList();

        dd($data['userList']);

        return view('frontend.manager.chat_index', $data);
    }

    public function getEmailVerify($email)
    {
        $managerlogin = $this->managerRepository->getManagerEmailVerify($email);
        if($managerlogin)
        {
            Session::flash('success','Email has been verified successfully..');
            return redirect()->route('profile');
        }else{
            Session::flash('error','Email has been already verified so now you can login');
            return redirect()->route('registration');
        }
    }
}
