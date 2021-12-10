<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\CandidateRepositoryInterface;
use App\Interfaces\EstablishmentRepositoryInterface;

class CandidateController extends Controller
{
    protected  $validationrules =
    [
        'profile_photo_path' => 'mimes:jpeg,png,jpg|max:2048',
        'about_me' => 'required',
        'current_situation'=>'required',
        'research'=>'required',
        'available_day'=>'required',
        'available_time'=>"required",
        'diplomas' =>"required",
        'seniority'=>"required",
        'age_range' =>"required",
        'mobility'=>'required',
        'permit_vehicle' =>"required",
        'first_name'=>'required',
        'last_name'=>"required",
        'gander'=>'required',
        'dob'=>'required|date',
        'phone'=>"required",
        'city'=>"required",
        'region'=>"required",
        'pedagogy'=>"required",
        'qualities'=>"required",
        'values'=>"required",
        'languages_spoken'=>'required',
        

    ];
    protected   $imageValidationRules =
    [

        'image' => 'required|mimes:jpeg,png,jpg|max:2048',

    ];
    public function __construct(CandidateRepositoryInterface $candidateRepository, EstablishmentRepositoryInterface $establishmentRepository)
    {
        $this->candidateRepository = $candidateRepository;
        $this->establishmentRepository = $establishmentRepository;
    }

    public function index()
    {

        $data['validator'] = JsValidator::make($this->imageValidationRules);
        $data['images'] = $this->establishmentRepository->getCandidateGallery();
        return view('frontend.candidate.profile', $data);
    }
    public function edit()
    {
        $this->validationrules['email'] = "required|email|unique:users,email,".auth()->guard('web')->user()->id . ",id,deleted_at,NULL";
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.candidate.edit', $data);
    }
    public function update(Request $request)
    {

        $this->validationrules['email'] = "required|email|unique:users,email," . auth()->guard('web')->user()->id . ",id,deleted_at,NULL";

        $validator = Validator::make($request->all(), $this->validationrules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $update = $this->candidateRepository->updateProfile($request);

        if ($update) {
            Session::flash('success', 'Successfully Updated');
            return redirect('mycandidate-profile');
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }
}
