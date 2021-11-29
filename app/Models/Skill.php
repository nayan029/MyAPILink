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

    public function position()
    {
        return $this->hasMany(SkillPosition::class,'id','skills_id');
    }

}
