<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    // protected $fillable = [
    //     'email',
    //     'password',
    //     'phone',
    //     'civility',
    //     'first_name',
    //     'last_name',
    //     'email ',
    //     'phone',
    //     'roles',
    //     'establishment_management',
    //     'represent',
    //     'organization',
    //     'number_of_establishments',
    //     'address',
    //     'postal_code',
    //     'city',
    //     'user_type',    
        
    // ];

    use HasFactory,SoftDeletes;

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $table = 'users';

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function getData()
    {
        $data =  Skill::get();
        $skill = SkillPosition::get();
    }
    public function saveJob()
    {
        return $this->hasMany(SavedJobs::class);
    }

    
}
