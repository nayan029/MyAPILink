<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ApplyJobRepositoryInterface
{
    public function getCandidateData();
    public function store(Request $request);
    public function getDocumentName(Request $request);
    public function insertPosts(Request $request);
    public function getSingleCandidatedata($id);
    public function getCompanyData($id);
    public function getManagerPosts($id);
    public function getJobsaveDataByUserId();
    public function getApplyJobDataByUserId();
    public function chatJobList();
}
