<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class PartnerController extends Controller
{


    protected $storevalidationrules = [
        'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $updatevalidationrules =
    [
        'link' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
    ];
    protected $imagevalidationrules =
    [
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $partnerRepository = "";

    public function __construct(PartnerRepositoryInterface $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    public function index()
    {
        return view('backend.partner.index');
    }

    public function create()
    {
        // $data['validator'] = JsValidator::make($this->storevalidationrules);

        return view('backend.partner.create');
    }

    public function store(Request $request)
    {
        // $validation = Validator::make($request->all(), $this->storevalidationrules);
        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation->errors());
        // }
        $storepartner = $this->partnerRepository->storePartner($request);
        if ($storepartner) {
            Session::flash('success', 'Successfully Inserted');
            return redirect()->route('partner.index');
        }
    }
    public function show($id)
    {
    }


    public function edit($id)
    {
        // $data['validator'] = JsValidator::make($this->updatevalidationrules);
        // $data['image'] = JsValidator::make($this->imagevalidationrules);
        $data['partner'] = $this->partnerRepository->getSinglePartner($id);
        return view('backend.partner.edit',$data);
    }


    public function update(Request $request, $id)
    {
        // $validation = Validator::make($request->all(), $this->updatevalidationrules);
        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation->errors());
        // }

        $data = $this->partnerRepository->updatePartner($request, $id);
        Session::flash('success', 'Successfully Updated');
        return redirect()->route('partner.index');
    }


    public function destroy(Request $request)
    {

        $delete = $this->partnerRepository->deletePartner($request->id);
        if ($delete) {
            return response()->json([
                'status' => true,
                'msg' => 'Successfully Deleted'
            ]);
        }
    }

    public function getPartnerData(Request $request)
    {
        return $this->partnerRepository->getPartnerData($request);
    }
}
