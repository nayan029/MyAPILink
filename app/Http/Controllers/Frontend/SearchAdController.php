<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Http\Controllers\Controller;
use App\Interfaces\ApplyJobRepositoryInterface;
use App\Interfaces\CandidateRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SearchAdController extends Controller
{


    protected  $candidateRepository = "", $applyJobRepository = "";



    public function __construct(CandidateRepositoryInterface $candidateRepository,ApplyJobRepositoryInterface $applyJobRepository)
    {
        $this->applyJobRepository = $applyJobRepository;
        $this->candidateRepository = $candidateRepository;
    }
    public function index(Request $request)
    {
        $data['list'] = $this->applyJobRepository->getCandidateData();
        $data['candidateCV'] =  $this->candidateRepository->getCvByUserId();

        return view('frontend.apply_job.index', $data);
    }
    public function store(Request $request)
    {
        if ($request->type == '1') {

            $validationrules['document_name'] = 'required';
            $validator = Validator::make($request->all(), $validationrules);
            if ($validator->fails()) {
                return response()->json(['success' => false, 'errors' => $validator->errors()]);
            }
        }
        $storeJobType = $this->applyJobRepository->store($request);

        $jobView = Job::select('total_reg')->where('id', $storeJobType->job_id)->first();
        $views = $jobView->total_reg + 1;
        $update = Job::where('id', $storeJobType->job_id)->update(['total_reg' => $views]);
        if ($storeJobType) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully Inserted'
            ]);
        }
    }
    public function getDocumentName(Request $request)
    {
        return $this->applyJobRepository->getDocumentName($request);
    }
    public function showJob($id)
    {
        $jobView = Job::where('id', $id)->select('total_view')->first();
        $views = $jobView->total_view + 1;
        $update = Job::where('id', $id)->update(['total_view' => $views]);

        $data['showList'] = $this->applyJobRepository->getSingleCandidatedata($id);
        return view('frontend.apply_job.show', $data);
    }
    public function insertPosts(Request $request)
    {

        $insertSavedPosts = $this->applyJobRepository->insertPosts($request);

        if ($insertSavedPosts) {
            if ($insertSavedPosts->job_save == 1) {
                $msg = 'Job Save Successfully!.';
            } else {
                $msg = 'Job Un Save Successfully!.';
            }
            return response()->json([
                'success' => true,
                'message' => $msg,
                'data' => $insertSavedPosts
            ]);
        }


        return response()->json([
            'success' => false,
            'message' => 'Sorry, something went wrong. please try again.',
            'data' => $insertSavedPosts
        ]);
    }
    public function showCompany($id, Request $request)
    {
        $data['pages'] = $request->page;
        $data['showCompany'] = $this->applyJobRepository->getCompanyData($id);
        $data['showJobs'] = $this->applyJobRepository->getManagerPosts($id);

        if ($request->ajax()) {
            return view('frontend.apply_job.get_ajax', $data)->render();
        }

        return view('frontend.apply_job.view', $data);
    }
    public function jobDetails($id, Request $request)
    {
        $data['showList'] = $this->applyJobRepository->getSingleCandidatedata($id);
        return view('frontend.apply_job.job_details', $data);
    }
}
