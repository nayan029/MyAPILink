<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillPosition extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $fillable = ['skills_id','position','title','desc'];
    protected $table = ['skill_position'];
}
