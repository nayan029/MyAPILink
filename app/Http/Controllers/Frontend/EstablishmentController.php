<?php

namespace App\Http\Controllers\Frontend;

use App\Interfaces\EstablishmentRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class EstablishmentController extends Controller
{
    protected $establishmentRepository = "";
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
        'document' => 'required',
        'more_infomation' => 'required',


    ];
    public function __construct(EstablishmentRepositoryInterface $establishmentRepository)
    {
        $this->establishmentRepository = $establishmentRepository;
    }
    public function index()
    {
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.establishment.create',$data);
    }
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), $this->validationrules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $storeProfile = $this->establishmentRepository->store($request);

        if ($storeProfile) {
            Session::flash('success', 'Successfully Updated');
            return redirect('/manager-profile');
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }
}
