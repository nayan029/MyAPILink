<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedJobs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'job_save';

    public function job()
    {
        return  $this->belongsTo(Job::class, 'job_id', 'id');
    }
    public function applyJob()
    {
        return $this->hasOne(ApplyJob::class, 'job_id', 'id')->where('user_id', auth()->user()->id);
    }
}
