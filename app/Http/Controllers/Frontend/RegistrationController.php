<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    protected $storevalidationrules = [
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|min:6',
        'phone' => 'required|digits:10',
        'customCheck1' => 'required',
        'customCheck2' => 'required',
    ];

    public function index()
    {
        $data['validator'] = JsValidator::make($this->storevalidationrules);
        return view('frontend/registration', $data);
    }

    public function saveRegistration(Request $request)
    {
        $validation = Validator::make($request->all(), $this->storevalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
    }
}
