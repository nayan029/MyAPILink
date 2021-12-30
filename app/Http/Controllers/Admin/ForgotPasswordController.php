<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\ForgotPasswordRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class ForgotPasswordController extends Controller
{
    protected $validationrules = [
        'email' => 'required|email|exists:admins',
    ];

    protected $resetvalidationrules = [
        'password' => 'required',
        'confirm_password' => 'required|same:password',
    ];

    protected $forgotPasswordRepository = "";

    public function __construct(ForgotPasswordRepositoryInterface $forgotPasswordRepository)
    {
        $this->forgotPasswordRepository = $forgotPasswordRepository;
    }

    public function index()
    {
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('backend.forgot.index', $data);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), $this->validationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $forgotdata = $this->forgotPasswordRepository->storePassword($request);
        if ($forgotdata) {
            Session::flash('success', 'Your password reset link is sent');
            return redirect()->route('admin.login');
        }
    }

    public function ResetPasswordForm($token)
    {
        $data['validator'] = JsValidator::make($this->resetvalidationrules);
        return view('backend.forgot.reset-password', ['token' => $token], $data);
    }

    public function ResetPassword(Request $request)
    {
        $validation = Validator::make($request->all(), $this->resetvalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $resetdata = $this->forgotPasswordRepository->resetPassword($request);

        if ($resetdata == true) {
            Session::flash('success', 'Password changed successfully');
            return redirect()->route('admin.login');
        } else {
            return redirect()->back();
        }
    }
}
