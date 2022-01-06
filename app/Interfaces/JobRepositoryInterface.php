<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface JobRepositoryInterface
{
    public function getJobdata(Request $request);

    public function getSingleJobData($id);
    public function allCandidates();

    public function acceptApplicants(Request $request);

    public function getCandidateData(Request $request);
}
