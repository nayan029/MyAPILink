<?php
namespace App\Repositories;
use App\Interfaces\RegistrationRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use PDF;

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
            $URL = route('email.verify', $user->email);
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
                    "api-key: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",
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
        //$verifyUser = User::where('email', $email)->where('verify_email', 'pending')->first();
        $verifyUser = User::where('email', $email)->first();
        if ($verifyUser) {
            $verifyUser->verify_email = 'accept';
            $verifyUser->update();
            return $verifyUser;
        } else {
            return false;
        }
    }

    public function updateCandidateProfileStep(Request $request,$userid)
    {
        $data = $request->all();
        if(isset($data['research']) || isset($data['available_time']))
        {
            $data["available_time"] = implode(',',$data['available_time']);
            $data["research"] = implode(',',$data['research']);
        }
        if(isset($data['experiences_at']) || isset($data['pedagogy']))
        {
            $data["experiences_at"] = implode(',',$data['experiences_at']);
            $data["pedagogy"] = implode(',',$data['pedagogy']); 
        }
        if(isset($data['qualities']) || isset($data['languages_spoken']) || isset($data['permit_vehicle']))
        {
            $data["qualities"] = implode(',',$data['qualities']);
            $data["languages_spoken"] = implode(',',$data['languages_spoken']); 
            $data["permit_vehicle"] = implode(',',$data['permit_vehicle']);
        }

        if(isset($data['kmmin']))
        {
            $data["km_rang"] = $data['kmmin'].','.$data['kmmax'];
        }
       $userProfile =  User::findorfail($userid);
       $userProfile->update($data);
       return $userProfile;
    }

    public function downalodStepResume($userid)
    {
        $userData =  User::findorfail($userid);
        view()->share('userData',$userData);
        $pdf = PDF::loadView('frontend.candidate.resume-download',$userData);
        return $pdf->download('test.pdf');
    }
}
