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
    public function index()
    {
        return view('frontend.establishment.create');
    }
}
