<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Interfaces\JobRepositoryInterface;
use App\Models\ApplyJob;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use JsValidator;

class JobController extends Controller
{

    protected $jobValidationRules = [
        'title' => 'required|max:25|regex:/^([^0-9]*)$/',
        'address' => 'required',
        'postal_code' => 'required|digits:5',
        'city' => 'required',
        'country' => 'required',
        'type_of_contract' => 'required',
        'duration_of_the_contract' => 'required',
        'job_type' => 'required',
        'contract_start_date' => 'required|after:tomorrow',
        'minimum_gross_salary' => 'required|min:4|numeric',
        'maximum_gross_salary' => 'required|numeric',
        'minimum_experience' => 'required|min:3',
        'deadline_for_receipt_of_applications' => 'required',
        'email_address' => 'required|email',
        'phone' => 'required|digits:10',
        'contact_thorugh' => 'required',
        'website' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'job_description' => 'required',
        'job_mission' => 'required',
        'what_you_are_looking_for' => 'required',
    ];

    protected $jobRepository = "";

    public function __construct(JobRepositoryInterface $jobRepository)
    {
        $this->jobRepository = $jobRepository;
        
    }


    public function index(Request $request, $id)
    {
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        $this->data['id'] = $id;
        return view('frontend.job.index', $this->data);
    }

    public function showJob($id)
    {

        $data['showwpost'] = $this->jobRepository->getSingleJobData($id);
        return view('frontend.job.show', $data);
    }

    public function editJob(Request $request, $id)
    {
        $this->data['jobvalidator'] = JsValidator::make($this->jobValidationRules);
        $id = request('id');
        $this->data['id'] = $id;
        $this->data['jobDetails'] = Job::findOrFail($id);
        return view('frontend.job.editjob', $this->data);
    }


    public function addOrUpdateJob(Request $request, $id)
    {

        $validation = Validator::make($request->all(), $this->jobValidationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $editId = request('edit_id');
        if (!empty(request('job_type'))) {
            $typeOfEmployment = implode(',', request('job_type'));
        }
        if (!empty(request('contact_thorugh'))) {
            $contactThrough = implode(',', request('contact_thorugh'));
        }
        $count = User::where('user_type', 1)->count();
        $certificationArray = array(
            'user_id' => $id,
            'title' => request('title'),
            'address' => request('address'),
            'zip_code' => request('postal_code'),
            'city' => request('city'),
            'country' => request('country'),
            'type_of_contract' => request('type_of_contract'),
            'contract_length' => request('duration_of_the_contract'),
            'type_of_employment' => $typeOfEmployment,
            'contract_start_date' => request('contract_start_date'),
            'minimum_gross_salary' => request('minimum_gross_salary'),
            'maximum_gross_salary' => request('maximum_gross_salary'),
            'minimum_experience' => request('minimum_experience'),
            'deadline_for_receipt_of_applications' => request('deadline_for_receipt_of_applications'),
            'email' => request('email_address'),
            'phone' => request('phone'),
            'contact_thorugh' => $contactThrough,
            'website' => request('website'),
            'job_description' => request('job_description'),
            'employment_mission' => request('job_mission'),
            'what_you_are_looking' => request('what_you_are_looking_for'),
            'total_reg' => $count,
        );
        if (!empty($editId)) {
            $certificationArray['updated_at'] = date('Y-m-d H:i:s');
            $data =  Job::where("id", $editId)->update($certificationArray);
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

        $jobData = Job::findorfail($id);
        $jobData->delete();
        Session::flash('success', 'Successfully deleted');
        return redirect()->back();
    }

    public function holdJobData(Request $request)
    {

        $data = Job::where('id', $request->id)->update(['is_hold' => $request->hold]);
        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully Updated',
                'hold' => $request->hold
            ]);
        }
    }

    public function viewApplcants($id)
    {

        $data['jobDetail'] = Job::where('id', $id)->first();
        $data['applyJob'] = ApplyJob::where('job_id', $id)->with('user')->get();
        return view('frontend.job.view-applicants', $data);
    }

    public function restoreUser($id)
    {
        Job::withTrashed()->findOrFail($id)->restore();
        Session::flash('success', 'Successfully Restored');
        return back();
    }

    public function storeApplicants(Request $request)
    {
        $request->validate([
            // 'jobCheck' => 'required',
        ]);
        $store = $this->jobRepository->acceptApplicants($request);
        if ($store) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully Inserted'
            ]);
        }
    }

    public function candidatePortfolio($id)
    {
        $data['userData'] = ApplyJob::where('user_id', $id)->first();
        return view('frontend.job.esatablishment-portfolio', $data);
    }
    public function showAllCandidate(Request $request){
        $data['candidateList'] = $this->jobRepository->allCandidates();
        return view('frontend.candidate.list',$data);
    }

    


}
