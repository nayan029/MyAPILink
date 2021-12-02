<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailTemplate;
use App\Models\PasswordReset;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {

        // Validator::make($input, [
        //     'firstname' => ['required', 'string', 'max:255'],
        //     'lastname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required'],
        //     'phone' => ['required', 'numeric'],
        //     'customCheck1' => ['required'],
        //     'customCheck2' => ['required'],
        // ])->validate();

        $token = Str::random(64);
        PasswordReset::create([
            'email' => $input['email'],
            'token' => $token
        ]);
        // User::create([
        //     'name' => $input['firstname'] . $input['lastname'],
        //     'email' => $input['email'],
        //     'password' => Hash::make($input['password']),
        //     'phone' => $input['phone'],
        // ]);

        $emailtemplateid = EmailTemplate::where('id', 2)->first();
        $html = $emailtemplateid->email;
        $link = route('reset.password', $token);
        $html = str_replace('{{link}}', $link, $html);
        Mail::send(
            'backend.email-template.accountcreate',
            ['token' => $token, 'emailtemplate' => $html],
            function ($message) use ($input) {
                $message->to($input['email']);
                $message->subject('Account Succesfully Created');
            }
        );


        // return response()->json([
        //     'status' => true,
        //     'msg' => 'Successfully Inserted'
        // ]);
    }
}
