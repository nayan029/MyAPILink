<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = false;

    protected $table = 'job';

    protected $guarded = ['id'];

    public function applyJob()
    {
        return $this->hasOne(ApplyJob::class);
    }
    public function saveJob()
    {
        return $this->hasMany(SavedJobs::class);
    }
}
