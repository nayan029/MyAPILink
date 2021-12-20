<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Establishment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'establishment';

    public function getUserList()
    {
        return  $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function getFindEstablishmentData()
    {
        return $this->belongsTo(job::class,'user_id','id');
    }
 
    
}
