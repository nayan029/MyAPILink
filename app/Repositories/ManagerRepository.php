<?php

namespace App\Repositories;

use Exception;
use App\Models\User;
use App\Models\ChatMaster;
use App\Models\RegisterStep;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use App\Models\Establishment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\ManagerRepositoryInterface;

class ManagerRepository implements ManagerRepositoryInterface
{
    use ImageuploadTrait;
    public function StoreProfile(Request $request)
    {

        try {
            $storeData = [
                'civility' => $request->civility,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'email' => $request->email_address,
                'password' => Hash::make($request->password),
                'roles' => $request->radio,
                'establishment_management' => $request->management,
                'represent' => $request->represent,
                'organization' => $request->name_of_our_organization,
                'number_of_establishments' => $request->number_of_establishments_in_the_organization,
                'address' => $request->organization_address,
                'postal_code' => $request->postal_code,
                'city' => $request->city,
                'user_type' => 2,
                'verify_email' => "accept",
            ];

            $manager = User::create($storeData);
            $storeDataEstablishment = array(
                'user_id' => $manager->id,
                'type' => "Default",
                'type_of_establishment' => $request->represent,
                'own_of_our_structure' => $request->name_of_our_organization,
            );
            Establishment::create($storeDataEstablishment);
            $URL = route('manager.email.verify', $manager->email);
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
                CURLOPT_POSTFIELDS => "{\"sender\":{\"name\":\"apilink\",\"email\":\"no-reply@apilink.fr\"},\"to\":[{\"name\":\"ApiLink\",\"email\":\"" . $request->email_address . "\"}],\"subject\":\"" . $subject . "\",\"templateId\":3,\"params\":{\"EMAIL\":\"" . $request->email_address . "\",\"RESET_LINK\":\"" . $URL . "\",\"LINK\":\"" . $URL . "\"}}",
                CURLOPT_HTTPHEADER => array(
                    "accept: application/json",
                    "api-key: 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",
                    "content-type: application/json"
                ),
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            return $manager;
        } catch (Exception $e) {
            return back()->withError($e->getMessage());
        }
    }
    public function updateProfile(Request $request)
    {
        $updateData = [
            'civility' => $request->civility,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email_address,
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

    public function getManagerEmailVerify($email)
    {
        $verifyUser = User::where('email', $email)->where('verify_email', 'pending')->first();
        if ($verifyUser) {
            $verifyUser->verify_email = 'accept';
            $verifyUser->update();
            Auth::loginUsingId($verifyUser->id);
            return true;
        }else{
            return false;
        }
    }
    public function managerChatList($opponent, $loginUserId)
    {
        return ChatMaster::where('deleted_at', NULL)->whereIn('sender_id', [$opponent, $loginUserId])
            ->whereIn('reciver_id', [$opponent, $loginUserId])->with('getUserReciverData', 'getUserSenderData')->first();
    }
    public function stepTwoInsert(Request $request)
    {
        $insertData = [];
        if ($request->hasFile('document')) {
            $files = $request->file('document');
            foreach ($files as $file) {
                $documents[] = $this->uploadImage($file, 'twostep/document');
            }
            $document = implode(",", $documents);
            $insertData['document'] = $document;
            $insertData['user_id'] = $request->user_id;
        }

        return RegisterStep::create($insertData);
    }
}
