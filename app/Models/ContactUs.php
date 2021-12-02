<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'contact_us';

    public static function contactUsData(Request $request){

        $user =  ContactUs::create($request->all());

        try {
            $emailtemplateid = EmailTemplate::where('id', 3)->first();
            $html = $emailtemplateid->email;
            $name = $user->firstname;
            $lastname = $user->lastname;
            $email = $user->email;
            $message = $user->description;
            $html = str_replace('{{FIRSTNAME}}', $name, $lastname , $html);
            $html = str_replace('{{EMAIL}}', $email, $html);
            $html = str_replace('{{MESSAGE}}', $message, $html);

            Mail::send('frontend.email-template.contact-us', ['emailtemplate' => $html], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Contact-us mail');
            });
            return true;
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
}
