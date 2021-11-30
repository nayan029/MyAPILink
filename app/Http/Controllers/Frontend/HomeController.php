<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Widget;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $homeRepository = "";

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function userDashboard()
    {
        $data['widget'] = Widget::get();
        if (Auth::check()) {
            $data['contact'] = $this->homeRepository->contactFooter();
            $data['partners'] = $this->homeRepository->partnerFooter();
            return view('frontend.dashboard', $data);
        } {
            return view('/login');
        }
    }
}
