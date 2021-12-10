<?php

namespace App\Repositories;

use App\Interfaces\ApplyJobRepositoryInterface;
use App\Models\Job;
use App\Models\ApplyJob;
use App\Models\SavedJobs;
use Illuminate\Http\Request;
use App\Http\Traits\ImageuploadTrait;
use App\Models\User;

class ApplyJobRepository implements ApplyJobRepositoryInterface
{
    use ImageuploadTrait;
    public function getCandidateData()
    {
        return Job::with('applyJob', 'savedJob')->where('deleted_at', NULL)->get();
    }
    public function store(Request $request)
    {
        $input['job_id'] = $request->jobid;
        $input['user_id'] = $request->userid;
        $input['apply_type'] = $request->type;
        $input['is_apply'] = 1;
        $input['document_name'] = $request->document_name;
        $input['created_at'] = date('Y-m-d H:i:s');

        $applyJob = ApplyJob::create($input);

        return $applyJob;
    }
    public function getDocumentName(Request $request)
    {
        if ($request->file('document_name')) {
            $choose_image = $this->uploadImage($request->file('document_name'), 'candidate_doc');
        }
        return $choose_image;
    }
    public function insertPosts(Request $request)
    {

        $inputs['job_id'] = $request->job_id;
        $inputs['user_id'] = $request->user_id;
        $inputs['job_save'] = $request->favPost;

        $checkType = SavedJobs::where('job_id', $request->job_id)->first();
        $update_array = array('job_save' => $request->favPost);
        if ($checkType) {
            $saveJob = SavedJobs::where('id', $checkType->id)->update($update_array);
            // $saveJob = SavedJobs::select('job_save')->where('id', $checkType->id)->first();
        } else {
            $saveJob = SavedJobs::create($inputs);
        }
        return $saveJob;
    }
    public function getSingleCandidatedata($id)
    {
        return Job::with('applyJob')->where('deleted_at', NULL)->where('id', $id)->first();
    }
    public function getCompanyData($id)
    {
        return User::findorfail($id);
    }
    public function getManagerPosts($id)
    { 
        return Job::where('deleted_at', NULL)->where('user_id', $id)->get();
    }
  
    public function getJobsaveDataByUserId()
    {
        return  SavedJobs::with('job')->where('job_save',1)->where('deleted_at', NULL)->where('user_id',auth()->guard('web')->user()->id)->get();
    }

    public function getApplyJobDataByUserId()
    {
        return  ApplyJob::with('jobApplay')->where('is_apply',1)->where('deleted_at', NULL)->where('user_id',auth()->guard('web')->user()->id)->get();
    }
    

    
}
