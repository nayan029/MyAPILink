<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\ContactRepositoryInterface;
use App\Models\ContactUs;
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

    public function index(){
        return view('backend.contact.index');
    }

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

    public function getContactUsData(Request $request){
        return $this->contactRepository->getAjaxData($request);
    }

    public function destroy(Request $request)
    {
       $delete =$this->contactRepository->deleteContactUs($request->id);
        if ($delete) {
            return response()->json([
                'status' => true,
                'msg' => 'Successfully Deleted'
            ]);
        }
    }
}
