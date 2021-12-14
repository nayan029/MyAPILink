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
    

    public function userData()
    {
        return  $this->belongsTo(User::class, 'user_id','id');
    }
    
    public function establishmentData()
    {
        return  $this->belongsTo(Establishment::class, 'company_id', 'id')->where('user_id',auth()->user()->id);
    }
    public function applyJob()
    {
        return $this->hasMany(ApplyJob::class,'company_id','job_id');
    }
}
