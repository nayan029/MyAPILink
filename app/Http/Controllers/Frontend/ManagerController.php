<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        return view('frontend.manager.create');
    }

    public function edit()
    {
        // $data['validator'] = JsValidator::make($this->updatevalidationrules);
        // $data['image'] = JsValidator::make($this->imagevalidationrules);
        // $data['partner'] = $this->partnerRepository->getSinglePartner($id);
        $data['partner'] ="";
        return view('frontend.manager.edit', $data);
    }
}
