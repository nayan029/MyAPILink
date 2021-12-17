<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatMaster extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'chat_master';
    

    public function getUserReciverData()
    {
        return  $this->belongsTo(User::class,'reciver_id','id');
    }

    
    public function getUserSenderData()
    {
        return  $this->belongsTo(User::class, 'sender_id','id');
    }
 
    public function applyJob()
    {
        return $this->hasMany(ApplyJob::class,'company_id','job_id');
    }

    public function getapplyJob()
    {
        return $this->belongsTo(ApplyJob::class,'job_id','id');
    }
}
