<?php

namespace App\Repositories;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\CandidateRepositoryInterface;

class CandidateRepository implements CandidateRepositoryInterface
{
    use ImageuploadTrait;
    public function updateProfile(Request $request)
    {
        $updateData = [
            
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'city' =>$request->city,
            'about_me'=>$request->about_me,
            'current_situation'=>$request->current_situation,
            'available_day'=>$request->available_day,
            'available_time'=>$request->available_time,
            'seniority'=>$request->seniority,
            'age_range'=>$request->age_range,
            'mobility'=>$request->mobility,
            'gander'=>$request->gander,
            'dob'=>$request->dob,
            'phone'=>$request->phone,
            'region'=>$request->region,
            'values'=>$request->values,
            'languages_spoken'=>$request->languages_spoken,
        
        ];
        $updateData['research'] = implode(",", $request->research);
        $updateData['diplomas'] = implode(",", $request->diplomas);
        $updateData['permit_vehicle'] = implode(",", $request->permit_vehicle);
        $updateData['pedagogy'] = implode(",", $request->pedagogy);
        $updateData['qualities'] = implode(",", $request->qualities);

        
        if($request->hasfile('profile_photo_path')) {
            $profile_photo_path  = $this->uploadImage($request->file('profile_photo_path'), 'Establishment/gallery');;
            $updateData['profile_photo_path'] = $profile_photo_path;
        }

        return User::where('id', auth()->guard('web')->user()->id)->update($updateData);
    }
   
}
