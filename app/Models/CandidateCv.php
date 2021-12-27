<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CandidateCv extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'candidate_cv';

    public static  function insert($data)
    {
		$auth = auth()->user();
		$insert_data = $data; 
		
	
		$inser_id = new CandidateCv($insert_data);
		$insert =  $inser_id->save();
		
		return $insert;
	}
}
