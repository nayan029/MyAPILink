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
        return view('frontend.dashboard', $data);

        // if (Auth::check()) {

        // } {
        //     return view('/login');
        // }
    }

    public function ajaxDataInsert(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->Code, //This Code coming from ajax request
            'details' => $request->Chief, //This Chief coming from ajax request
        ]);

        return response()->json(
            [
                'success' => true,
                'message' => 'Data inserted successfully'
            ]
        );
    }
}
