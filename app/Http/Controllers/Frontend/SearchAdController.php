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
    public function store(Request $request)
    {
        $storeJobType = $this->applyJobRepository->store($request);

        if ($storeJobType) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully Inserted'
            ]);
        }
        return response()->json([
            'success' => false,
            'message' => 'Sorry, something went wrong. please try again.'
        ]);
    }
    public function getDocumentName(Request $request)
    {
        return $this->applyJobRepository->getDocumentName($request);
    }
}
