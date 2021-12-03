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
        'name' => 'required',
        'description' => 'required',
        'image' => 'required',
    ];
    protected $updatevalidationrules = [
        'name' => 'required',
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
        $data['validator'] = JsValidator::make($this->storevalidationrules);
        return view('backend.skills.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), $this->storevalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }
        $storeskill = $this->SkillRepository->storeSkill($request);
        if ($storeskill) {
            Session::flash('success', 'Successfully inseted');
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
        $data['validator'] = JsValidator::make($this->updatevalidationrules);
        $data['skill_position'] = SkillPosition::where('skills_id',$id)->get();
        $data['skill'] = $this->SkillRepository->getSingleSkill($id);
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
        
        $validation = Validator::make($request->all(), $this->updatevalidationrules);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors());
        }

        $updateskill = $this->SkillRepository->updateSkill($request, $id);
        if ($updateskill) {
            Session::flash('success', 'Sucessfully updated');
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
            Session::flash('success', 'Successfully deleted');
            return redirect()->route('skill.index');
        }
    }

    public function getData(Request $request)
    {

        return $this->SkillRepository->getSkillData($request);
    }
}
