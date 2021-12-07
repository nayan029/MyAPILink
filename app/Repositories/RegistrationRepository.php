<?php

namespace App\Repositories;

use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\EmailTemplate;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Session;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    public function createRegistration($request)
    {
        try {

        $data = [
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request['email'],
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ];
        $user = User::create($data);
       
        $emailtemplate = EmailTemplate::where('id', 4)->first();
        if ($emailtemplate) {
            $email = $user->email;
            $html = $emailtemplate->email;
            $link = route('email.verify',$email);
            $html = str_replace('{{LINK}}',$link, $html);
            Mail::send(
                'frontend.email-template.email-verify',
                ['email' => $email,'emailtemplate'=>$html],
                function ($message) use ($request) {
                    $message->to($request->email);
                    $message->subject('Account Created Succesfully');
                });
              return response()->json([
                'status' => true,
                'msg' => 'Successfully sent'
            ]);
            }
            } catch (Exception $e) {
                return back()->withError($e->getMessage());
            } 
        
    }

    public function verifyEmail($email)
    {
        $verifyUser = User::where('email', $email)->where('verify_email', 'pending')->first();
        if ($verifyUser) {
                $verifyUser->verify_email = 'accept';
                $verifyUser->update();
                return true;
            }else{
                return false;
        }
    
    }
}
