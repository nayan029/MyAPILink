<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use JsValidator;

class JobController extends Controller
{

    protected $jobValidationRules = [
        'title' => 'required',
        'address' => 'required',
        'zip_code' => 'required|digits:6',
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
        'phone' => 'required|digits:10',
        'website' => 'required',
        'job_description' => 'required',
        'employment_mission' => 'required',
        'what_you_are_looking' => 'required',
    ];

    public function index(Request $request,$id)
    {
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        $this->data['id'] =$id;
        return view('frontend.job.index', $this->data);
    }

    public function showJob($id)
    {
        $data['showwpost'] = Job::where('id', $id)->get();
        return view('frontend.job.show', $data);
    }

    public function editJob(Request $request, $id)
    {
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        $id = request('id');
        $this->data['jobDetails'] = Job::find($id);
        return view('frontend.job.editjob', $this->data);
    }
    public function admin()
    {       
        $count = User::where('user_type',1)->get();
        return view('frontend.manager.manager-profile', ['count' => $count[0]->total]);
    }

    public function addOrUpdateJob(Request $request,$id)
    {
        $validation = Validator::make($request->all(), $this->jobValidationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $editId = request('edit_id');
        if (!empty(request('type_of_employment'))) {
            $typeOfEmployment = implode(',', request('type_of_employment'));
        }
        if (!empty(request('contact_thorugh'))) {
            $contactThrough = implode(',', request('contact_thorugh'));
        }
      
        $certificationArray = array(
            'user_id' => $id,
            'title' => request('title'),
            'address' => request('address'),
            'zip_code' => request('zip_code'),
            'city' => request('city'),
            'country' => request('country'),
            'type_of_contract' => request('type_of_contract'),
            'contract_length' => request('contract_length'),
            'type_of_employment' => $typeOfEmployment,
            'contract_start_date' => request('contract_start_date'),
            'minimum_gross_salary' => request('minimum_gross_salary'),
            'maximum_gross_salary' => request('maximum_gross_salary'),
            'minimum_experience' => request('minimum_experience'),
            'deadline_for_receipt_of_applications' => request('deadline_for_receipt_of_applications'),
            'email' => request('email'),
            'phone' => request('phone'),
            'contact_thorugh' => $contactThrough,
            'website' => request('website'),
            'job_description' => request('job_description'),
            'employment_mission' => request('employment_mission'),
            'what_you_are_looking' => request('what_you_are_looking'),
        );
        if (!empty($editId)) {
            $certificationArray['updated_at'] = date('Y-m-d H:i:s');
            Job::where("id", $editId)->update($certificationArray);
            Session::flash('success', 'Successfully Updated');
            return redirect()->route('profile');
        } else {
            $certificationArray['created_at'] = date('Y-m-d H:i:s');
            $instert = new Job($certificationArray);
            $instert->save();
            $id = $instert->id;
            Session::flash('success', 'Successfully Inserted');
            return redirect()->route('joblist', $id);
        }
    }

    public function destroy($id)
    {
        $id = Job::findorfail($id);
        $id->delete();
        Session::flash('success', 'Successfully deleted');
        return redirect()->route('profile');
    }

    public function viewApplcants()
    {
        $data['applicants'] = Job::where('user_id', 1)->paginate(10);
        $id = Auth::user()->id;
        $data['user'] = User::where('id', $id)->paginate(10);
        return view('frontend.job.view-applicants', $data);
    }

    public function restoreUser($id)
    {
        Job::withTrashed()->find($id)->restore();
        return back();
    }
}
