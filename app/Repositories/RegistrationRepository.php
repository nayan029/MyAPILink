<?php

namespace App\Repositories;

use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\EmailTemplate;
use App\Models\User;


class RegistrationRepository implements RegistrationRepositoryInterface
{
    public function createRegistration($request)
    {
        $data = [
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request['email'],
            'password' => Hash::make($request->password),
            'phone' => $request->phone
        ];

        $emailtemplate = EmailTemplate::where('id', 2)->first();
        if($emailtemplate)
        {
            $html = $emailtemplate['email'];
            $html = str_replace('{{LINK}}',"", $html);
            Mail::send(
                'frontend.email-template.accountcreate',
                ['emailtemplate' => $html],
                function ($message) use ($request) {
                    $message->to($request['email']);
                    $message->subject('Account Created Succesfully');
                }
            );
        }
      
        User::create($data);
        if ($data) {
            return response()->json([
                'status' => true,
                'msg' => 'Successfully Created'
            ]);
        }
    }
}
