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
                'phone' => $request->phone,
                'user_type' => 1
            ];
            $user = User::create($data);

            // $emailtemplate = EmailTemplate::where('id', 4)->first();
            // if ($emailtemplate) {
            //     $email = $user->email;
            //     $html = $emailtemplate->email;
            //     $link = route('email.verify', $email);
            //     $html = str_replace('{{LINK}}', $link, $html);
            //     Mail::send('frontend.email-template.email-verify',
            //         ['email' => $email, 'emailtemplate' => $html],
            //         function ($message) use ($request) {
            //             $message->to($request->email);
            //             $message->subject('Account Created Succesfully');
            //         }
            //     );
            //     return true;
            // }
            $URL = route('email.verify', $user->email);
            $html = "Frogot password <br> <a href='" . $URL . "' target='_blank'>Click Here</a>";
            $subject = "Api Link Password Reset";
            // -------Mail------
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING  => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\"sender\":{\"name\":\"Api Link\",\"email\":\"no-reply@myhelper.fr\"},\"to\":[{\"name\":\"Api Link\",\"email\":\"" . $request->email . "\"}],\"subject\":\"" . $subject . "\",\"templateId\":1,\"params\":{\"EMAIL\":\"" . $request->email . "\",\"RESET_LINK\":\"" . $URL . "\",\"LINK\":\"" . $URL . "\"}}",
                CURLOPT_HTTPHEADER => array(
                    "accept: application/json",
                    "api-key: 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",
                    "content-type: application/json"

                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            return true;
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
        } else {
            return false;
        }
    }
}
