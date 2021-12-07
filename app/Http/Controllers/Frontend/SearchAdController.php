<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Interfaces\ApplyJobRepositoryInterface;
use Illuminate\Http\Request;

class SearchAdController extends Controller
{
    protected $applyJobRepository = "";


    public function __construct(ApplyJobRepositoryInterface $applyJobRepository)
    {
        $this->applyJobRepository = $applyJobRepository;
    }
    public function index()
    {
        $data['list'] = $this->applyJobRepository->getCandidateData();
        return view('frontend.apply_job.index', $data);
    }
}
