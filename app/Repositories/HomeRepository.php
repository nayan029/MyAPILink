<?php

namespace App\Repositories;

use App\Models\Contact;
use App\Models\Newsletter;
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

use App\Models\Skill;
use App\Models\Widget;
use Illuminate\Support\Facades\Auth;

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
    public function UserData()
    {
        $data['widget'] =  Widget::get();
        $data['skill'] =  Skill::get();
        return $data;
    }

    public function getSkillPositionData(Request $request)
    {
        $data = Skill::with('positions')->findOrFail($request->id);
        return $data;
    }

    public function storeNewsLater(Request $request)
    {

        $instArray = array(
            'email' => request('email'),
            'created_at' => date('Y-m-d H:i:s'),
        );
        $inasert = new Newsletter($instArray);
        $inasert->save();
        return $inasert;
    }

    public function usersLogin(Request $request)
    {
        $user =   Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'deleted_at' => NULL, 'verify_email' => 'accept']);
        return $user;
    }
}
