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

    protected $fillable = ['id','user_id','title','address','zip_code','city','country','type_of_contract','contract_length','type_of_employment','contract_start_date','minimum_gross_salary','maximum_gross_salary','minimum_experience','deadline_for_receipt_of_applications','email','phone','email_regarding','phone_regarding','apilink_regarding','website','job_description','employment_mission','what_you_are_looking','created_at', 'updated_at', 'deleted_at'];

}
