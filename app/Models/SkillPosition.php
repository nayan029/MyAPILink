<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillPosition extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = ['skill_position'];
}
