<?php

namespace App\Repositories;

use App\Http\Traits\ImageUploadTrait;
use App\Interfaces\SkillRepositoryInterface;
use App\Models\Skill;
use App\Models\SkillPosition;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SkillRepository implements SkillRepositoryInterface
{
    use ImageUploadTrait;

    public function getSingleSkill($id)
    {
        return Skill::findorfail($id);
    }
    public function storeSkill(Request $request)
    {
        dd($request->all());
        $image = "";
        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request->file('image'), 'skills');
        }
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
        ];
        $skill = Skill::create($data);
        $skillposition = [];
        if (count($request->position) > 0) {

            foreach ($request->position as $key => $value) {
                $skillposition[] = [
                        'skill_id' => $skill->id,
                        'position' => $value,
                        'title' => $request['title'][$key],
                        'desc' => $request['desc'][$key],
                    ];
            }
            
           return SkillPosition::create($skillposition);
        }
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
        $draw = $request->query('draw', 0);
        $start = $request->query('start', 0);
        $length = $request->query('length', 25);
        $order = $request->query('order', array(1, 'asc'));

        $sortcolumns = array(
            0 => 'skills.name',
            1 => 'skills.description',
            2 => 'skills.image',
            3 => 'skills.status',
        );

        $query = Skill::select('*');
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
                $skill->description,
            ];
        }
        return $json;

        
    }

}
