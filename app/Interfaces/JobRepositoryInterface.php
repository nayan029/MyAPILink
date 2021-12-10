<?php 

namespace App\Interfaces;

use Illuminate\Http\Request;

interface JobRepositoryInterface
{
    public function getJobdata(Request $request);
    
    public function getSingleJobData($id);

    public function showJobData($id);

    public function storeOrUpdateJob(Request $request,$id);
}