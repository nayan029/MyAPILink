<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\Skill;
use App\Models\Widget;
use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\EstablishmentRepositoryInterface;

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
        


    ];
    protected   $imageValidationRules =
    [
        
        'image' => 'required|mimes:jpeg,png,jpg|max:2048',

    ];
    protected $newsletterValidationRules = [
        'email' => 'required|email|unique:newsletter,email,NULL,id,deleted_at,NULL'
    ];
   
    public function __construct(EstablishmentRepositoryInterface $establishmentRepository)
    {
        $this->establishmentRepository = $establishmentRepository;
    }
    public function index()
    {
        $data['accommodationCapacity'] = array (1=>1 );
        $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.establishment.create',$data);
    }
    public function store(Request $request)
    {
        $validationrules['document']='required|mimes:pdf';
        $validationrules['more_infomation'] = 'required|mimes:jpeg,png,jpg|max:2048';
        $validator = Validator::make($request->all(), $this->validationrules);
        if ($validator->fails()) {
           print_r($validator->errors());
           die;
            return redirect()->back()->withErrors($validator->errors());
        }

        $storeProfile = $this->establishmentRepository->store($request);

        if ($storeProfile) {
            Session::flash('success', 'Successfully Inserted');
            return redirect('/view-establishment-account/'.$storeProfile->id);
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }
    public function show(Request $request,$id)
    {
        $data['imageValidator'] = JsValidator::make($this->imageValidationRules);
        $data['images'] = $this->establishmentRepository->getEstablishmentGallery($id);
        $data['establishment'] = $this->establishmentRepository->getSingleEstablishment($id);
       
        return view('frontend.establishment.show',$data);
    }
    public function edit($id)
    {
        
        $data['validator'] = JsValidator::make($this->validationrules);
        $data['establishment'] = $this->establishmentRepository->getSingleEstablishment($id);
        return view('frontend.establishment.edit',$data);
    }
    public function update(Request $request,$id)
    {


        $validator = Validator::make($request->all(), $this->validationrules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $update = $this->establishmentRepository->update($request,$id);

        if ($update) {
            Session::flash('success', 'Successfully Updated');
            return redirect('/view-establishment-account/'.$id);
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }

    public function uploadImage(Request $request)
    {


        $validator = Validator::make($request->all(), $this->imageValidationRules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $store = $this->establishmentRepository->uploadEstablishmentImage($request);

        if ($store) {
            return response()->json(['success' => true, 'message' => 'Successfully Inserted','data' => $store]);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }
    public function removeImage(Request $request)
    {
        $delete = $this->establishmentRepository->deleteImage($request->id);
      
        if ($delete) {
            return response()->json(['success' => true, 'message' => 'Successfully Deleted','data' => $delete]);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }

    
    public function dashborad()
    {
        $data['newslettervalidator'] = JsValidator::make($this->newsletterValidationRules);
        $data['widget'] = Widget::get();
        $data['skill'] = Skill::get();
        return view('frontend.establishment.dashborad',$data);
    }
    
    
    
}
