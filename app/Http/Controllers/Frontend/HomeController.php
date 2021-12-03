<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\HomeRepositoryInterface;
use Illuminate\Http\Request;
use App\Models\Widget;
use App\Models\Newsletter;
use JsValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    protected $newsletterValidationRules = [
        'email' => 'required|email|unique:newsletter,email,NULL,id,deleted_at,NULL'
    ];
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
        $data['newslettervalidator'] = JsValidator::make($this->newsletterValidationRules);
        $data['widget'] = Widget::get();
        return view('frontend.dashboard',$data);
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


     public function addNewsletter(Request $request)
    {

        $validation = Validator::make($request->all(), $this->newsletterValidationRules);

        if ($validation->fails()) {

            return redirect()->back()->withErrors($validation->errors());
        }
        $instArray = array('email' =>request('email'),
                           'created_at' =>date('Y-m-d H:i:s'),
                           );
        $inasert=new Newsletter($instArray);
        $inasert->save();
      
        //   ---------------
        session()->flash('message-type', 'success');
        session()->flash('message','Add Newsletter successfully');
        return redirect('/');
    }
}
