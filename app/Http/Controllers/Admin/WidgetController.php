<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\WidgetRepositoryInterface;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class WidgetController extends Controller
{

    protected $storevalidationrules = [
        'title' => 'required|max:25|regex:/^([^0-9]*)$/',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        'description' => 'required',
        'widget' => 'required',
    ];


    protected $updatevalidationrules = [
        'title' => 'required|max:50|regex:/^([^0-9]*)$/',
        'description' => 'required',
        'widget' => 'required',
    ];

    protected $slugvalidationrules = [
       'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
        'description' => 'required',
        'widget' => 'required',
    ];

    protected $slugupdaterules = [
        'widget' => 'required',
        'description' => 'required',
    ];

    protected $widgetRepository = "";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(WidgetRepositoryInterface $widgetRepository)
    {
        $this->widgetRepository = $widgetRepository;
    }
    public function getAjaxData(Request $request)
    {
        return $this->widgetRepository->getWidgetdata($request);
    }

    public function index()
    {
        return view('backend.widget.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['validator'] = JsValidator::make($this->storevalidationrules);
        $data['widget'] = ['our_advantages' => 'OUR ADVANTAGES', 'our_added_value' => 'OUR ADDED VALUE', 'how_it_works' => 'HOW IT WORKS'];
        return view('backend.widget.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->widget=="how_it_works")
        {
            $validation = Validator::make($request->all(), $this->slugvalidationrules);
        }else{
            $validation = Validator::make($request->all(), $this->storevalidationrules);
        }
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $storewidget = $this->widgetRepository->storeWidget($request);
        if ($storewidget) {
            Session::flash('success', 'Successfully Inserted');
            return redirect()->route('widget.index');
        }else{
            Session::flash('error', 'Title already exits');
            return redirect()->back;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['widget'] = $this->widgetRepository->getSingleWidget($id);
        return view('backend.widget.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['validator'] = JsValidator::make($this->updatevalidationrules);
        $data['widget'] = $this->widgetRepository->getSingleWidget($id);
        $data['widgets'] = ['our_advantages' => 'OUR ADVANTAGES', 'our_added_value' => 'OUR ADDED VALUE', 'how_it_works' => 'HOW IT WORKS'];
        return view('backend.widget.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->widget=="how_it_works")
        {
            $validation = Validator::make($request->all(), $this->slugupdaterules);
        }else{
            $validation = Validator::make($request->all(), $this->updatevalidationrules);
        }
        
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        
        $updateWidget = $this->widgetRepository->updateWidget($request, $id);

        if ($updateWidget) {
            Session::flash('success', 'Successfully Updated');
            return redirect()->route('widget.index');
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletewidget = $this->widgetRepository->deleteWidget($id);
        if ($deletewidget) {
            Session::flash('success', 'Successfully Deleted');
            return redirect()->route('widget.index');
        }
    }
}
