<?php

namespace App\Repositories;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Interfaces\CandidateRepositoryInterface;
use App\Models\EmailTemplate;

class CandidateRepository implements CandidateRepositoryInterface
{
   
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
   
}
