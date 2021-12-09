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
        return Job::with('applyJob', 'saveJob')->where('deleted_at', NULL)->get();
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
        $inputs['job_save'] = $request->saveType;

        $saveJob = SavedJobs::create($inputs);

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
}
