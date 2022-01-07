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
use App\Models\SkillPosition;
use App\Models\Widget;
use GuzzleHttp\Promise\Create;
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

       $user =  PasswordReset::create([
            'email' => $request->email,
        ]);
        try {
          
            $URL = route('forgotpassword-user', $user->email);
            $html = "Verify profile <br> <a href='" . $URL . "' target='_blank'>Click Here</a>";
            $subject = "Please complete your profile on ApiLink";
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.sendinblue.com/v3/smtp/email",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING  => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\"sender\":{\"name\":\"ApiLink\",\"email\":\"no-reply@apilink.fr\"},\"to\":[{\"name\":\"ApiLink\",\"email\":\"" . $request->email . "\"}],\"subject\":\"" . $subject . "\",\"templateId\":4,\"params\":{\"EMAIL\":\"" . $request->email . "\",\"LINK\":\"" . $URL . "\"}}",
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

    public function updatePassword(Request $request)
    {
        
        $updatepassword = PasswordReset::where('email', $request->email)->first();
 
        if ($updatepassword && $updatepassword != null) {
            $password = User::where('email', $updatepassword->email)->first();           
                User::where('email', $updatepassword->email)
                    ->update(['password' => Hash::make($request->password)]);
                PasswordReset::where(['email' => $updatepassword->email])->delete();
                return true;
            
        } else {
            Session::flash('error', 'Invalid email');
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
        $data = SkillPosition::findOrFail($request->id);
        return $data;
    }

    public function storeNewsLater(Request $request)
    {

        $instArray = array(
            'email' => request('email'),
            'created_at' => date('Y-m-d H:i:s'),
        );
        $inasert = Newsletter::create($instArray);
        return $inasert;
    }

    public function usersLogin(Request $request)
    {
        $user =   Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'deleted_at' => NULL, 'verify_email' => 'accept']);
        return $user;
    }
}
