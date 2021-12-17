<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    protected $validationrules = [];


    public function storeContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:25|regex:/^([^0-9]*)$/',
            'lastname' => 'required|max:25|regex:/^([^0-9]*)$/,',
            'email' => 'required|unique:contact_us|email    ',
            'description' => 'required',
        ]);

        if (!$validator->passes()) {
            return response()->json(['status' => false, 'error' => $validator->errors()->toArray()]);
        } else {
            $data = ContactUs::contactUsData($request);
            if ($data) {
                return response()->json(['status' => true, 'message' => 'Thank you for Contact us']);
            }
        }
    }
}
