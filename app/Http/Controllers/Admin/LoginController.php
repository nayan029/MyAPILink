<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use JsValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{   
    protected $validationRules = [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ];

    public function index(){
        if(Auth::guard('admins')->check()){
            return redirect()->route('admin.dashboard');
        }
        $data['validator'] = JsValidator::make($this->validationRules);
        return view('backend.login',$data);
    }

    public function adminLogin(Request $request)
    {   
        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
                return redirect()->back()->withErrors($validation->errors());
        }
        
        $remember_me  = ( !empty( $request->remember_me ) )? TRUE : FALSE;
                                                            
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admins')->attempt($credentials,$remember_me)){
            Session::flash('success','Administrator login successfuly!!...');
            return redirect()->route('admin.dashboard');
        }else{
            Session::flash('error','Email or password invalid');
            return redirect()->back();
        }        
    }
    public function adminDashboard(){
        if(Auth::guard('admins')->check()){
            return view('backend.dashboard.index');
        }else{
            return view('backend.login');
        }

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}