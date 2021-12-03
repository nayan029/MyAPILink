<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\JobVacanciesRepositoryInterface;
use App\Models\JobVacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class JobVacanciesController extends Controller
{

    protected $validationrules = [
        'title' => 'required',
        'address' => 'required',
        'zipcode' => 'required',
        'city' => 'required',
        'country' => 'required',
        'type_of_contract' => 'required',
        'contract_length' => 'required',
        'contract_start_date' => 'required',
        'min_salary' => 'required',
        'max_salary' => 'required',
        'min_experience' => 'required',
        'deadline_of_applications' => 'required',   
        'job_desc' => 'required',
        'employment_mission' => 'required',
        'looking_for' => 'required',
    ];  
    protected $jobpostsRepository = "";

    public function __construct(JobVacanciesRepositoryInterface $jobpostsRepository)
    {
        $this->jobpostsRepository = $jobpostsRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$id)
    {
            $data = JobVacancy::first();
            dd($data);
            return view('frontend.publish-job-offer.index',$id);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.job-vacancies.create',$data);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(),$this->validationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $storeData = $this->jobpostsRepository->storePosts($request);
        $id = $storeData->id;
        if ($storeData) {
            Session::flash('success', 'Successfully Inserted');
            return redirect('publish-job-offer',$id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
