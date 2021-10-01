<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'mobile_number',
        'password',
        'profile_image',
        'cover_image',
        'user_status',
        'country',
        'state',
        'city',
        'tagline',
        'description',
        'birth_date',
        'gender',
        'address',
        'account_type',
        'hourly_rate',
        'skills_id',
        'facebook_id',
        'google_id',
    ];

    public function userInfo(){
        return $this->hasMany(UserExperience::class, 'id');
    }
    public function user(){
        return $this->hasMany(UserEducation::class, 'id');
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
