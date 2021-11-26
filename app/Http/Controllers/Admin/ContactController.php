<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\ContactRepositoryInterface;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;


class ContactController extends Controller
{
    protected $contactRepository = "";

    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    protected $validationRules = [
        'email' => 'required|email',
        'mobile' => 'required|digits:10',
        'address' => 'required',
    ];
    public function edit($id)
    {
        $data['validator'] = JsValidator::make($this->validationRules);
        $data['contact'] = $this->contactRepository->editContact($id);

        return view('backend.contact.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), $this->validationRules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $this->contactRepository->updateContact($request, $id);
        return redirect()->back()->with(Session::flash('success', 'Successfully Updated'));
    }
}
