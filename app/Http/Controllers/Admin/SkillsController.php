<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interfaces\SkillRepositoryInterface;
use App\Models\SkillPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use JsValidator;

class SkillsController extends Controller
{
    protected $storevalidationrules = [
        'name' => 'required|max:50|regex:/^([^0-9]*)$/',
        'description' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];
    protected $updatevalidationrules = [
        'name' => 'required|max:50|regex:/^([^0-9]*)$/',
        'description' => 'required',
    ];



    protected $SkillRepository = "";

    public function __construct(SkillRepositoryInterface $SkillRepository)
    {
        $this->SkillRepository = $SkillRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.skills.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $data['validator'] = JsValidator::make($this->storevalidationrules);
        return view('backend.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validation = Validator::make($request->all(), $this->storevalidationrules);
        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation->errors());
        // }
        $storeskill = $this->SkillRepository->storeSkill($request);
        if ($storeskill) {
            Session::flash('success', 'Successfully Inseted');
            return redirect()->route('skill.index');
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
        $data['skill'] = $this->SkillRepository->getSingleSkill($id);
        return view('backend.skills.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data['validator'] = JsValidator::make($this->updatevalidationrules);
        $data['skill_position'] = SkillPosition::where('skill_id', $id)->where('deleted_at', NULL)->get();

        $data['skill'] = $this->SkillRepository->getSingleSkill($id);
        // dd( $data['skill_position']);
        return view('backend.skills.edit', $data);
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
        // $validation = Validator::make($request->all(), $this->updatevalidationrules);
        // if ($validation->fails()) {
        //     return redirect()->back()->withErrors($validation->errors());
        // }

        $updateskill = $this->SkillRepository->updateSkill($request, $id);
        if ($updateskill) {
            Session::flash('success', 'Sucessfully Updated');
            return redirect()->route('skill.index');
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
        $deleteskill = $this->SkillRepository->destroySkill($id);
        if ($deleteskill) {
            Session::flash('success', 'Successfully Deleted');
            return redirect()->route('skill.index');
        }
    }

    public function destroyPosition(Request $request)
    {
        $deletePosition = $this->SkillRepository->destroyPos($request);
        if ($deletePosition) {
            return response()->json(["success" => true, "skillData" => $deletePosition]);
        }
    }

    public function getData(Request $request)
    {

        return $this->SkillRepository->getSkillData($request);
    }
}
