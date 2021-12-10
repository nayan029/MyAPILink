<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\EmailTemplate;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Exception;


class HomeRepository implements HomeRepositoryInterface
{
    public function contactFooter()
    {
        return Contact::first();
    }

    public function partnerFooter()
    {
        return Partner::get();
    }

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
            $link = route('forgotpassword-user', $token);
            $html = str_replace('{{LINK}}', $link, $html);

            Mail::send('frontend.email-template.forgot-password', ['token' => $token, 'emailtemplate' => $html], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Api link Password Reset');
            });
            return true;
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }

    public function updatePassword(Request $request)
    {

        $updatepassword = PasswordReset::where('token', $request['token'])->first();
        if ($updatepassword && $updatepassword != null) {
            $password = User::where('email', $updatepassword->email)->first();
           
                User::where('email', $updatepassword->email)
                    ->update(['password' => Hash::make($request->password)]);
                PasswordReset::where(['email' => $updatepassword->email])->delete();
                return true;
            
        } else {
            Session::flash('error', 'Invalid token');
            return false;
        }
    }
}
