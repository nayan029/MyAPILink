<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\ManagerRepositoryInterface;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class ManagerController extends Controller
{
    protected $managerRepository = "";
    protected   $updatevalidationrules =
    [
        'civility' => 'required',
        'firstname' =>"required|max:25",
        'lastname' =>"required|max:25",
        
    ];
    public function __construct(ManagerRepositoryInterface $managerRepository)
    {
        $this->managerRepository = $managerRepository;
 
    }

   
    public function index()
    {
        return view('frontend.manager.create');
    }

    public function storeData(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'civility' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone' => 'required|numeric|digits:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
            'radio' => 'required',
            'represent' => 'required',
            'organization' => 'required',
            'number_of_establishments' => 'required',
            'address' => 'required',
            'postal_code' => 'required|digits:6',
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
        $this->updatevalidationrules['email'] = "required|email|unique:users,email,".auth()->guard('web')->user()->id.",id,deleted_at,NULL";
     
        $data['validator'] = JsValidator::make($this->updatevalidationrules);
        return view('frontend.manager.manager-profile',$data);
    }

    public function updateProfile(Request $request)
    {
  
        $this->updatevalidationrules['email'] = "required|email|unique:users,email,".auth()->guard('web')->user()->id.",id,deleted_at,NULL";
      
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
}
