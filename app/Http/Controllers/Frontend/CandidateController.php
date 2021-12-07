<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\CandidateRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class CandidateController extends Controller
{
    protected   $validationrules =
    [
        'type_of_establishment' => 'required',
        'own_of_our_structure' => 'required',
        'opening_date' => 'required',
        'year' => 'required',
        'direction' => 'required',
        'effective' => 'required',
        'number_of_groups_and_age_groups' => 'required',
        'accommodation_capacity' => 'required',
        'surface_area_of_the_establishment' => 'required',
        'garden' => 'required',
        'applied_pedagogy' => 'required',
        'our_values' => 'required',
        


    ];
    public function __construct(CandidateRepositoryInterface $candidateRepository)
    {
        $this->candidateRepository = $candidateRepository;
    }
    public function index()
    {
        
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.candidate.profile',$data);
    }
    public function edit()
    {
        
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.candidate.edit',$data);
    }
}
