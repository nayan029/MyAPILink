<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Newsletter extends Model
{
    use HasFactory;
    use SoftDeletes;

      public $timestamps = false;

    protected $table = 'newsletter';

    protected $fillable = ['id', 'email','created_at', 'updated_at', 'deleted_at'];

}
