<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Job;
use JsValidator;

class JobController extends Controller{


    protected $jobValidationRules = [
        'title' => 'required',
        'address' => 'required',
        'zip_code' => 'required',
        'city' => 'required',
        'country' => 'required',
        'type_of_contract' => 'required',
        'contract_length' => 'required',
        'type_of_employment' => 'required',
        'contract_start_date' => 'required',
        'minimum_gross_salary' => 'required',
        'maximum_gross_salary' => 'required',
        'minimum_experience' => 'required',
        'deadline_for_receipt_of_applications' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'website' => 'required',
        'job_description' => 'required',
        'employment_mission' => 'required',
        'what_you_are_looking' => 'required',
    ];

    public function index(Request $request)
    {  
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        return view('frontend.job.index',$this->data);
    }
    public function editJob(Request $request)
    {  
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        $id=request('id');
        $this->data['jobDetails']=Job::find($id);
        return view('frontend.job.editjob',$this->data);
    }
    

    public function addOrUpdateJob(Request $request){

        $validation = Validator::make($request->all(), $this->jobValidationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $editId = request('edit_id');
        if (!empty(request('type_of_employment'))) {
            $typeOfEmployment=implode(',',request('type_of_employment'));
        }
        $certificationArray = array(
                'user_id' =>1,
                'title' => request('title'),
                'address' =>request('address'),
                'zip_code' =>request('zip_code'),
                'city' =>request('city'),
                'country' => request('country'),
                'type_of_contract' => request('type_of_contract'),
                'contract_length' => request('contract_length'),
                'type_of_employment' =>$typeOfEmployment,
                'contract_start_date' => request('contract_start_date'),
                'minimum_gross_salary' => request('minimum_gross_salary'),
                'maximum_gross_salary' => request('maximum_gross_salary'),
                'minimum_experience' => request('minimum_experience'),
                'deadline_for_receipt_of_applications' => request('deadline_for_receipt_of_applications'),
                'email' => request('email'),
                'phone' => request('phone'),
                'email_regarding' => request('email_regarding'),
                'phone_regarding' => request('phone_regarding'),
                'apilink_regarding' => request('apilink_regarding'),
                'website' => request('website'),
                'job_description' => request('job_description'),
                'employment_mission' => request('employment_mission'),
                'what_you_are_looking' => request('what_you_are_looking'),
        );
      
        if (!empty($editId)) {
            $certificationArray['updated_at'] = date('Y-m-d H:i:s');
            Job::where("id", $editId)->update($certificationArray);
            session()->flash('message','Successfully edited');
        } else {
            $EducationArray['created_at'] = date('Y-m-d H:i:s');
            $instert = new Job($certificationArray);
            $instert->save();
            session()->flash('message','Successfully creted');
        }
        session()->flash('message-type', 'success');
        return redirect('manager-profile');
    }

}