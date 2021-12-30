<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'skills';

    public function positions()
    {
        return $this->hasMany(SkillPosition::class);
    }

    public static function getAjaxData($id){
        $data['skillpos'] = Skill::where('id',$id)->get();
        return response()->json($data,200);
    }

    public function notHavingImageInDb(){
        return (empty($this->image))?true:false;
    }

}
