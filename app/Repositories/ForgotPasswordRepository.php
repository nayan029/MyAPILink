<?php

namespace App\Repositories;

use App\Interfaces\ForgotPasswordRepositoryInterface;
use App\Models\Admin;
use App\Models\EmailTemplate;
use App\Models\PasswordReset;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ForgotPasswordRepository implements ForgotPasswordRepositoryInterface
{
    public function storePassword(Request $request)
    {
        
        $token = Str::random(64);

        PasswordReset::create([
            'email' => $request->email,
            'token' => $token
        ]);
        try {
            $emailtemplateid = EmailTemplate::where('id', 1)->first();
            $html = $emailtemplateid->email;
            $link = route('reset.password', $token);
            $html = str_replace('{{LINK}}', $link, $html);

            Mail::send('backend.email-template.forgot-password', ['token' => $token, 'emailtemplate' => $html], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password');
            });
            return true;
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    public function resetPassword(Request $request)
    {

        $updatepassword = PasswordReset::where('token', $request['token'])->first();
        if ($updatepassword && $updatepassword != null) {
            $adminPassword = Admin::where('email', $updatepassword->email)->first();
            if (Hash::check($request->password, $adminPassword->password)) {
                Session::flash('error', 'You can`t use previous password');
                return false;
            } else {
                Admin::where('email', $updatepassword->email)
                    ->update(['password' => Hash::make($request->password)]);
                PasswordReset::where(['email' => $updatepassword->email])->delete();
                return true;
            }
        } else {
            Session::flash('error', 'Invalid token');
            return false;
        }
    }
}
