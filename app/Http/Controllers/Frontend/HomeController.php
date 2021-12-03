<?php

namespace App\Http\Controllers\Frontend;

use JsValidator;
use App\Models\Widget;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Interfaces\HomeRepositoryInterface;

class HomeController extends Controller
{
    protected $homeRepository = "";
    protected   $loginValidationRules =
    [
        'email' => 'required|email',
        'password' => "required",
    ];

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
        $data['managerLoginValidator'] = JsValidator::make($this->loginValidationRules);
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
    public function userLogin(Request $request)
    {

        $validator = Validator::make($request->all(), $this->loginValidationRules);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()]);
        }

        // Auth::guard('admin')->attempt($request->only('email', 'password'));
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'deleted_at' => NULL])) {

            // return redirect('manager-profile');
            return response()->json(['success' => true, 'message' =>'Connexion réussie']);
        }
        return response()->json(['success' => false, 'errors' => array('invalid'=>'Email et le mot de passe sont erronés')]);

    }
}
