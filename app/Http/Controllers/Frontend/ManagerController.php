<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\ManagerRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller
{
    protected $managerRepository = "";

    public function __construct(ManagerRepositoryInterface $managerRepository)
    {
        $this->managerRepository = $managerRepository;
    }

    public function index()
    {
        return view('frontend.manager.create');
    }

    public function storeData(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'civility' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|unique:manager',
            'password' => 'required|confirmed',
            'radio' => 'required',
            'represent' => 'required',
            'organization' => 'required',
            'number_of_establishments' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'city' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        $storeProfile = $this->managerRepository->StoreProfile($request);
        if ($storeProfile) {
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Registered Sucessfully'
                ]
            );
        }
    }


    public function profile()
    {
        dd(Auth::guard('web')->user());
        return view('frontend.manager.manager-profile');
    }
}
