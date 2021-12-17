<?php

namespace App\Repositories;

use App\Interfaces\ApplyJobRepositoryInterface;
use App\Models\Job;
use App\Models\ApplyJob;
use App\Models\SavedJobs;
use Illuminate\Http\Request;
use App\Http\Traits\ImageuploadTrait;
use App\Models\ChatMaster;
use App\Models\User;

class ApplyJobRepository implements ApplyJobRepositoryInterface
{
    use ImageuploadTrait;
    public function getCandidateData()
    {
        return Job::with('applyJob')->with('savedJob')->where('deleted_at', NULL)->paginate(2);
    }
    public function store(Request $request)
    {

        $input['job_id'] = $request->jobid;
        $input['user_id'] = auth()->user()->id;
        $input['company_id'] = $request->userid;
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
        //dd($request->all());
        $inputs['job_id'] = $request->job_id;
        $inputs['user_id'] = auth()->user()->id;
        //$inputs['job_save'] = $request->favPost;

        $checkType = SavedJobs::where('job_id', $request->job_id)->where('user_id', auth()->user()->id)->first();

        // $update_array = array('job_save' => $request->favPost);
        if ($checkType) {
            if ($checkType->job_save == 1) {
                $status = 0;
            } else {
                $status = 1;
            }
            $update_array['job_save'] = $status;
            SavedJobs::where('id', $checkType->id)->update($update_array);
        } else {
            $inputs['job_save'] = 1;
            SavedJobs::create($inputs);
        }
        $checkType = SavedJobs::where('job_id', $request->job_id)->where('user_id', auth()->user()->id)->first();
        return $checkType;
    }
    public function getSingleCandidatedata($id)
    {
        return Job::with('applyJob')->with('savedJob')->where('deleted_at', NULL)->where('id', $id)->first();
    }
    public function getCompanyData($id)
    {
        return User::findorfail($id);
    }
    public function getManagerPosts($id)
    {
        return Job::with('applyJob')->where('deleted_at', NULL)->where('user_id', $id)->paginate(2);
    }

    public function getJobsaveDataByUserId()
    {
        return  SavedJobs::with('applyJob')->with('job')->where('job_save', 1)->where('deleted_at', NULL)->where('user_id', auth()->guard('web')->user()->id)->get();
    }

    public function getApplyJobDataByUserId()
    {
        return  ApplyJob::with('jobApplay')->where('is_apply', 1)->where('deleted_at', NULL)->where('user_id', auth()->guard('web')->user()->id)->get();
    }

    public function chatJobList()
    {
        return  ApplyJob::with('jobApplay')->where('is_apply', 1)->where('deleted_at', NULL)->where('user_id', auth()->guard('web')->user()->id)->get();
    }
    // public function chatUserList()
    // {
    //     return ChatMaster::where('id', auth()->user()->id)->groupBy('')->where('deleted_at', NULL)->get();
    //     return  ApplyJob::with('jobApplay','getEstablishmentList')->where('is_apply',1)->where('deleted_at', NULL)->where('user_id',auth()->guard('web')->user()->id)->get();
    // }
    public function chatUserList(){
        return ChatMaster::groupBy('sender_id')->where('deleted_at', NULL)->get();
    }
}
