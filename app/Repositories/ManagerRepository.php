<?php

namespace App\Repositories;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Interfaces\ManagerRepositoryInterface;
use App\Models\EmailTemplate;

class ManagerRepository implements ManagerRepositoryInterface
{
    public function StoreProfile(Request $request)
    {
        try {
            $storeData = [
                'civility' => $request->civility,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'phone' => $request->telephone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'roles' => $request->radio,
                'establishment_management' => $request->management,
                'represent' => $request->represent,
                'organization' => $request->organization,
                'number_of_establishments' => $request->number_of_establishments,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'city' => $request->city,
                'user_type' => 2,
                'verify_email' => "accept",
            ];
            //dd($storeData);
            $manager = User::create($storeData);

            $URL = route('email.verify', $manager->email);
            $html = "Verify profile <br> <a href='" . $URL . "' target='_blank'>Click Here</a>";
            $subject = "Please complete your profile on ApiLink";
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
                CURLOPT_POSTFIELDS => "{\"sender\":{\"name\":\"ApiLink\",\"email\":\"no-reply@apilink.fr\"},\"to\":[{\"name\":\"ApiLink\",\"email\":\"" . $request->email . "\"}],\"subject\":\"" . $subject . "\",\"templateId\":1,\"params\":{\"EMAIL\":\"" . $request->email . "\",\"RESET_LINK\":\"" . $URL . "\",\"LINK\":\"" . $URL . "\"}}",
                CURLOPT_HTTPHEADER => array(
                    "accept: application/json",
                    "api-key: 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",
                    "content-type: application/json"
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            // $findUser = Manager::where('id', $manager->id)->first();
                // $emailtemplateid = EmailTemplate::where('id', 2)->first();

                // $mail = $manager->email;
                // $address = $manager->address;
                // $telephone = $manager->telephone;
                // $firstname = $manager->first_name;
                // $organization = $manager->organization;
                // $civility = $manager->civility;
                // $html = $emailtemplateid->email;

                // $html = str_replace('{{FIRSTNAME}}', $firstname, $html);
                // $html = str_replace('{{TELEPHONE}}', $telephone, $html);
                // $html = str_replace('{{EMAIL}}', $mail, $html);
                // $html = str_replace('{{ORGANIZATION}}', $organization, $html);
                // $html = str_replace('{{ADDRESS}}', $address, $html);
                // $html = str_replace('{{CIVILITY}}', $civility, $html);

                // Mail::send(
                //     'frontend.email-template.manager-mail',
                //     [
                //         'emailtemplate' => $html,
                //     ],
                //     function ($message) use ($request) {
                //         $message->to($request->email);
                //         $message->subject('Telephone appointment');
                //     }
                // );
                return true;
            } catch (Exception $e) {
                return back()->withError($e->getMessage());
            }
        }
    public function updateProfile(Request $request)
    {
        $updateData = [
            'civility' => $request->civility,
            'first_name' => $request->firstname,
            'last_name' => $request->lastname,
            'email' => $request->email,
            'roles' => $request->roles,

        ];

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }
    public function changePassword(Request $request)
    {
        $updateData = [
            'password' => Hash::make($request->password),
        ];
        $request->session()->forget('password_hash_web');
        $user = $this->getSingleUser(auth()->guard('web')->user()->id);
        Auth::guard('web')->login($user);

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }

    public function changeEmail(Request $request)
    {
        $updateData = [
            'email' => $request->email,
        ];

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }


    public function getSingleUser($id)
    {
        return User::findorfail($id);
    }
    public function changeNotificationFlag(Request $request)
    {
        $updateData = [
            'notifications_email' => $request->flag,
        ];

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }

    public function changeDeleteAccountFlag(Request $request)
    {
        $updateData = [
            'delete_account_flag' => $request->delete_account_flag,
        ];

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }

    
    
}
