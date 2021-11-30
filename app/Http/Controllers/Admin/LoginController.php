<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Widget;
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

    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        } else {
            $data['validator'] = JsValidator::make($this->validationRules);
            return view('backend.login', $data);
        }
    }

    public function adminLogin(Request $request)
    {
        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $remember_me  = (!empty($request->remember_me)) ? TRUE : FALSE;

        $credentials = $request->only('email', 'password');

        if (auth()->guard('admin')->attempt($credentials)) {
            Session::flash('success', 'Administrator login successfuly!!...');
            return redirect()->route('admin.dashboard');
        } else {
            Session::flash('error', 'Email or password invalid');
            return redirect()->back();
        }
        if (auth()->guard('web')->attempt($credentials)) {
            Session::flash('success', 'Login successfuly!!...');
            return redirect()->route('/home');
        }
    }
    public function adminDashboard()
    {
        if (Auth::guard('admin')->check()) {
            return view('backend.dashboard.index');
        } {
            return view('backend.login');
        }
    }

    public function userDashboard()
    {
        $data['widget'] = Widget::get();
        if (Auth::check()) {
            return view('frontend.dashboard', $data);
        } {
            return view('/login');
        }
    }

    public function adminlogout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
