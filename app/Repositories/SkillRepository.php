<?php

namespace App\Repositories;

use App\Http\Traits\ImageuploadTrait;
use App\Interfaces\SkillRepositoryInterface;
use App\Models\Skill;
use App\Models\SkillPosition;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class SkillRepository implements SkillRepositoryInterface
{
    use ImageuploadTrait;

    public function getSingleSkill($id)
    {
        return Skill::findorfail($id);
    }
    public function getSKillPosition($id)
    {
        return SkillPosition::findorfail($id);
    }

    public function storeSkill(Request $request)
    {

        $data = $request->all();

        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'skills');
        }
        $skillsInsertArr = [
            "name" => $data['name'],
            "description" => $data['description'],
            "image" => $image,
        ];
        $skill = Skill::create($skillsInsertArr);

        $n = count($data['position']);

        for ($i = 0; $i < $n; $i++) {
            $savedata = [
                'skill_id' => $skill->id,
                'position' => $data['position'][$i],
                'title' => $data['title'][$i],
                'desc' => $data['descs'][$i],
            ];

            DB::table('skill_position')->insert($savedata);
            //  SkillPosition::create($savedata);
        }
        return true;
    }
    public function updateSkill(Request $request, $id)
    {
        $data = $request->all();
        $skill = $this->getSingleSkill($id);
        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'skills');
        } else {
            $image = $skill->image;
        }
        $data['image'] = $image;
        $skill->update($data);
        return $skill;
        


        // $position = $this->getSKillPosition($id);    
        $position = SkillPosition::where('skill_id',$id)->delete();
        $n = count($data['position']);
        for ($i = 0; $i < $n; $i++) {
            $savedata = [
                'skill_id' => $skill->id,
                'position' => $data['position'][$i],
                'title' => $data['title'][$i],
                'desc' => $data['descs'][$i],
            ];  
            SkillPosition::create($savedata);
        }
        return true;
    }

    public function destroySkill($id)
    {
        $skill = $this->getSingleSkill($id);
        if (File::exists($skill->image)) {
            unlink("" . $skill->image);
        }
        $skill->delete();
        return $skill;
    }

    public function getSkillData(Request $request)
    {

        $searchName = $request->query('search_name');
        $searchImage = $request->query('search_image');

        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));

        $sortcolumns = array(
            0 => 'skills.name',
            1 => 'skills.image',
        );

        $query = Skill::select('*');
        if (!empty($searchName)) {
            $query->where('name', 'like', '%' . $searchName . '%');
        }
        if (!empty($searchImage)) {
            $query->where('image', 'like', '%' .$searchImage.'%');
        }
        $recordstotal = $query->count();
        $sortColumnName = $sortcolumns[$order[0]['column']];

        $query->orderBy($sortColumnName, $order[0]['dir'])
            ->take($length)
            ->skip($start);

        $json = array(
            'draw' => $draw,
            'recordsTotal' => $recordstotal,
            'recordsFiltered' => $recordstotal,
            'data' => [],
        );
        $skills = $query->orderBy('created_at', 'desc')->get();
        foreach ($skills as $skill) {
            $url = route("skill.show", $skill->id);
            $nameAction = "<a href='" . $url . "'>" . $skill->name . "</a>";
            $Image = "<img src='" . url($skill->image) . "' height='50px' width='50px'>";

            $json['data'][] = [
                $nameAction,
                $Image,
            ];
        }
        return $json;
    }

    public function destroyPos(Request $request)
    {   
        $data =  SkillPosition::findorfail($request->deleteId);
        $data->delete();
        return true;
       
    }
}
