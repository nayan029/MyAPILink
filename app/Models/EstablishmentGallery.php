<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstablishmentGallery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'establishment_gallery';
    
    public function establishment()
    {
        return $this->hasOne(Establishment::class,'id','establishment_id');
    }
}
