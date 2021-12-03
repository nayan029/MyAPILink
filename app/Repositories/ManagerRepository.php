<?php

namespace App\Repositories;

use App\Interfaces\ManagerRepositoryInterface;
use App\Models\EmailTemplate;
use App\Models\Manager;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


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
            ];
            $manager = User::create($storeData);
            // $findUser = Manager::where('id', $manager->id)->first();
            Auth::guard('web')->login($manager);

            $emailtemplateid = EmailTemplate::where('id', 2)->first();

            $mail = $manager->email;
            $address = $manager->address;
            $telephone = $manager->telephone;
            $firstname = $manager->first_name;
            $organization = $manager->organization;
            $civility = $manager->civility;
            $html = $emailtemplateid->email;

            $html = str_replace('{{FIRSTNAME}}', $firstname, $html);
            $html = str_replace('{{TELEPHONE}}', $telephone, $html);
            $html = str_replace('{{EMAIL}}', $mail, $html);
            $html = str_replace('{{ORGANIZATION}}', $organization, $html);
            $html = str_replace('{{ADDRESS}}', $address, $html);
            $html = str_replace('{{CIVILITY}}', $civility, $html);
        
            Mail::send(
                'frontend.email-template.manager-mail',
                [
                    'emailtemplate' => $html,
                ],
                function ($message) use ($request) {
                    $message->to($request->email);
                    $message->subject('Telephone appointment');
                }
            );
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
        ];

        return Manager::where('id',auth()->guard('manager')->user()->id)->update($updateData);

    
    }
}
