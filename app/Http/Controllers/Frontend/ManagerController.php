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
use App\Interfaces\CandidateRepositoryInterface;
use App\Models\ApplyJob;
use App\Models\ChatMaster;

class ManagerController extends Controller
{
    protected $managerRepository = "";
    protected   $updatevalidationrules =
    [
        'civility' => 'required|max:5|regex:/^([^0-9]*)$/',
        'first_name' => "required|max:25|regex:/^([^0-9]*)$/",
        'last_name' => "required|max:25|regex:/^([^0-9]*)$/",
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
    protected $candidateRepository = "";

    public function __construct(ManagerRepositoryInterface $managerRepository, ApplyJobRepositoryInterface $applyJobRepository, CandidateRepositoryInterface $candidateRepository)
    {
        $this->managerRepository = $managerRepository;
        $this->applyJobRepository = $applyJobRepository;
        $this->candidateRepository = $candidateRepository;
    }

    public function index()
    {
        return view('frontend.manager.create');
    }

    public function storeData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'civility' => 'required|regex:/^([^0-9]*)$/',
            'first_name' => 'required|max:25|regex:/^([^0-9]*)$/',
            'last_name' => 'required|max:25|regex:/^([^0-9]*)$/',
            'phone' => 'required|numeric|digits:10',
            'email_address' => 'required|email|unique:users,email,NULL,id,deleted_at,NULL',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'represent' => 'required',
            'name_of_our_organization' => 'required|max:75',
            // 'number_of_establishments_in_the_organization' => 'required|numeric|digits:5',
            'organization_address' => 'required',
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
                    'message' => 'Registered Sucessfully',
                    'data' => $storeProfile
                ]
            );
        }
    }


    public function profile()
    {
        $this->updatevalidationrules['email_address'] = "required|email|unique:users,email," . auth()->guard('web')->user()->id . ",id,deleted_at,NULL";

        $id = auth()->guard('web')->user()->id;
        $userType = auth()->guard('web')->user()->user_type;
        $data['validator'] = JsValidator::make($this->updatevalidationrules);
        $data['myJobList'] = Job::where('user_id', $id)->paginate(4);
        $data['remaining'] = Job::where('created_at', '>=', Carbon::now())->get();
        $data['deleted'] = Job::onlyTrashed()->get();
        $data['myEstablishmentList'] = Establishment::where('user_id', $id)->whereNull('type')->get();
        $data['defaultEstablishment'] = Establishment::where('user_id', $id)->where('type','Default')->first();
        
        if ($userType == 2) {
            if (auth()->guard('web')->user()->establishment_management == "single") {
                $EstablishmentDetails = Establishment::where('user_id', $id)->orderBy('id', 'DESC')->first();
                return redirect('view-establishment-account/' . $EstablishmentDetails->id);
            } else {
                return view('frontend.manager.manager-profile', $data);
            }
        } elseif ($userType == 1) {

            return redirect()->route('mycandidate-profile');
        }
    }

    public function updateProfile(Request $request)
    {

        $this->updatevalidationrules['email_address'] = "required|email|unique:users,email," . auth()->guard('web')->user()->id . ",id,deleted_at,NULL";

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
        $searchVal = request('search_val');
        $loginUserId = auth()->user()->id;
        $data['validator'] = JsValidator::make($this->imageValidationRules);
        $data['userList'] = $userList = $this->applyJobRepository->chatUserList();
        $receiverarray = array();
        $senderarray = array();
        $checkChatData = array();
        $opponent = array();
        foreach ($userList as $kkey) {
            $receiverarray[] = $kkey->receiver_id;
            if (!in_array($kkey->receiver_id, $opponent) && $loginUserId != $kkey->receiver_id) {
                $opponent[] = $kkey->receiver_id;
            }
            $senderarray[] = $kkey->sender_id;
            if (!in_array($kkey->sender_id, $opponent) && $loginUserId != $kkey->sender_id) {
                $opponent[] = $kkey->sender_id;
            }
        }
        foreach ($opponent as $kkkey) {
            $detailsData = $this->managerRepository->managerChatList($kkkey, $loginUserId);
            $checkChatData[] = $detailsData;
        }
        $data['chatList'] = $checkChatData;

        return view('frontend.manager.chat_index', $data);
    }

    public function getEmailVerify($email)
    {
        $managerlogin = $this->managerRepository->getManagerEmailVerify($email);
        if ($managerlogin) {
            Session::flash('success', 'Email has been verified successfully..');
            return redirect()->route('profile');
        } else {
            Session::flash('error', 'Email has been already verified so now you can login');
            return redirect()->route('registration');
        }
        $userList = $this->applyJobRepository->chatUserList();



        return view('frontend.manager.chat_index', $data);
    }
    public function messageListAjax(Request $request)
    {
        $data['id'] = $request->id;
        $data['reciverid'] = $request->reciverid;
        $data['reciverData'] = $this->candidateRepository->getReciverData($request->reciverid);
        $data['validator'] = JsValidator::make($this->imageValidationRules);
        $data['messagelist'] =  $this->candidateRepository->getAllMessage($request->id, $request->reciverid);

        return view('frontend.manager.chatbox', $data);
    }

    public function managerRegisterStepTwo(Request $request, $id)
    {
        $data['id'] = $id;
        return view('frontend.manager.manager_register_step_two', $data);
    }


    public function managerRegisterStepTwoInsert(Request $request)
    {


        $data = $this->managerRepository->stepTwoInsert($request);
        if ($data) {
            Session::flash('success', 'Successfully Inserted');
            return redirect()->route('dashboard');
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }
}
