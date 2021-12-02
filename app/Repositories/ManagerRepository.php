<?php

namespace App\Repositories;

use App\Interfaces\ManagerRepositoryInterface;
use App\Models\EmailTemplate;
use App\Models\Manager;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use function GuzzleHttp\Promise\all;

class ManagerRepository implements ManagerRepositoryInterface
{
    public function StoreProfile(Request $request)
    {
           $storeData = [
                'civility' => $request->civility,
                'first_name' => $request->firstname,
                'last_name' => $request->lastname,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'roles' => $request->radio,
                'establishment_management'=>$request->management,
                'represent' => $request->represent,
                'organization' => $request->organization,
                'number_of_establishments' => $request->number_of_establishments,
                'address' => $request->address,
                'postal_code' => $request->postal_code,
                'city' => $request->city,
            ];

             $manager = Manager::create($storeData);
    
    try {
        $emailtemplateid = EmailTemplate::where('id', 2)->first();
        $html = $emailtemplateid->email;
        Mail::send('frontend.email-template.manager-mail', ['organization' => $manager->organization,
        'email' => $manager->email,
        'address' => $manager->address,
        'telephone' => $manager->telephone,
        'firstname' => $manager->firstname,
        'emailtemplate'=>$html,
    ],
 function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Telephone appointment');
        });
        return true;
    } catch (Exception $e) {
        return back()->withError($e->getMessage());
    }
}
} 