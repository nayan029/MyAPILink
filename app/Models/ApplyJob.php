<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ApplyJob extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'apply_job';

    public function jobApplay()
    {
        return  $this->belongsTo(job::class, 'job_id', 'id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id')->select('first_name','last_name','id');
    }
}

