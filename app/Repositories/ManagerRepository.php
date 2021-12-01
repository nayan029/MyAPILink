<?php

namespace App\Repositories;

use App\Interfaces\ManagerRepositoryInterface;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
             $credentials = $request->only('email', 'password');

             if (Auth::attempt($credentials)) {
     
                 return redirect()->intended('dashboard')
                             ->withSuccess('You have Successfully logged in');
             }
                    
             return true;



    }
}