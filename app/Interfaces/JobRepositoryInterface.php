<?php 

namespace App\Interfaces;

use Illuminate\Http\Request;

interface JobRepositoryInterface
{
    public function getJobdata(Request $request);
    
    public function getSingleJobData($id);


    public function acceptApplicants(Request $request,$id);
}