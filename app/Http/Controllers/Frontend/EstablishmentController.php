<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\Widget;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\EstablishmentRepositoryInterface;

class EstablishmentController extends Controller
{
    protected $establishmentRepository = "";
    protected   $validationrules =
    [
        'type_of_establishment' => 'required',
        'own_of_our_structure' => 'required|regex:/^([^0-9]*)$/',
        'opening_date' => 'required',
        // 'direction' => 'required|regex:/^([^0-9]*)$/',
        'effective' => 'required',
        'number_of_groups_and_age_groups' => 'required',
        'accommodation_capacity' => 'required',
        'surface_area_of_the_establishment' => 'required|numeric',
        'garden' => 'required',
        'applied_pedagogy' => 'required',
    ];
    protected   $imageValidationRules =
    [
        'image' => 'required|mimes:jpeg,png,jpg|max:2048',
    ];
    protected   $cvValidationRules =
    [
        'cv' => 'required|mimes:pdf,PDF|max:2048',

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
        $data['accommodationCapacity'] = array(1 => 1);
        // $data['validator'] = JsValidator::make($this->validationrules);
        return view('frontend.establishment.create', $data);
    }
    public function store(Request $request)
    {

        $validationrules['document'] = 'required|mimes:pdf';
        $validationrules['more_infomation'] = 'required|mimes:jpeg,png,jpg';

        // $validator = Validator::make($request->all(), $this->validationrules);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator->errors());
        // }

        $storeProfile = $this->establishmentRepository->store($request);

        if ($storeProfile) {
            Session::flash('success', 'Successfully Inserted');
            return redirect('manager-profile');
        }
        Session::flash('error', 'Sorry, something went wrong. please try again.');
        return redirect()->back();
    }
    public function show(Request $request, $id)
    {
        $data['imageValidator'] = JsValidator::make($this->imageValidationRules);
        $data['images'] = $this->establishmentRepository->getEstablishmentGallery($id);
        $data['establishment'] = $this->establishmentRepository->getSingleEstablishment($id);

        $postsdata = $this->establishmentRepository->getPostsData($id);
        $data['jobListing'] = $postsdata['jobListing'];
        $data['remaining'] = $postsdata['remaining'];
        $data['deleted'] = $postsdata['deleted'];
        return view('frontend.establishment.show', $data);
    }
    public function edit($id)
    {
        $data['establishment'] = $this->establishmentRepository->getSingleEstablishment($id);
        return view('frontend.establishment.edit', $data);
    }
    public function update(Request $request, $id)
    {

        $update = $this->establishmentRepository->update($request, $id);

        if ($update) {
            Session::flash('success', 'Successfully Updated');
            return redirect('/view-establishment-account/' . $id);
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
            return response()->json(['success' => true, 'message' => 'Successfully Inserted', 'data' => $store]);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }

    public function uploadCv(Request $request)
    {


        $validator = Validator::make($request->all(), $this->cvValidationRules);
        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $store = $this->establishmentRepository->uploadCv($request);

        if ($store) {
            return response()->json(['success' => true, 'message' => 'Successfully Inserted', 'data' => $store]);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }

    public function removeImage(Request $request)
    {
        $delete = $this->establishmentRepository->deleteImage($request->id);

        if ($delete) {
            return response()->json(['success' => true, 'message' => 'Successfully Deleted', 'data' => $delete]);
        }
        return response()->json(['success' => false, 'message' => 'Sorry, something went wrong. please try again.']);
    }


    public function dashborad()
    {
        $data['newslettervalidator'] = JsValidator::make($this->newsletterValidationRules);
        $data['widget'] = Widget::get();
        return view('frontend.establishment.dashborad', $data);
    }
}
