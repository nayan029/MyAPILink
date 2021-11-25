<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\PartnerRepositoryInterface;
use Illuminate\Http\Request;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\ImageUploadTrait;

class PartnerController extends Controller
{
    protected $storevalidationrules = [
        'link' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    protected $PartnerRepository = "";

    public function __construct(PartnerRepositoryInterface $PartnerRepository)
    {
        $this->PartnerRepository = $PartnerRepository;
    }

    public function index()
    {
        return view('backend.partner.index');
    }

    public function create()
    {
        $data['validator'] = JsValidator::make($this->storevalidationrules);
        return view('backend.partner.create', $data);
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), $this->storevalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $storepartner = $this->PartnerRepository->storePartner($request);
        if ($storepartner) {
            Session::flash('success', 'Successfully inserted');
            return redirect()->route('partner.index');
        }
    }
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function getPartnerData(Request $request)
    {
        return $this->PartnerRepository->getPartnerdata($request);
    }
}
