<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'partner';
}
