<?php

namespace App\Repositories;

use App\Interfaces\ApplyJobRepositoryInterface;
use App\Models\Job;

class ApplyJobRepository implements ApplyJobRepositoryInterface
{
    public function getCandidateData()
    {
        return Job::where('deleted_at', NULL)->get();
    }
}
