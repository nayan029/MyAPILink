<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RegisterStep extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'register_2_step';
}
