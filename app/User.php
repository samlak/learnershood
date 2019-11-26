<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'school_id', 'department_id', 'role_id', 'profile_picture' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function role(){
        return $this->belongsTo('App\Role');
    }
     
    public function school(){
        return $this->belongsTo('App\School');
    } 

    public function schools(){
        return $this->hasMany('App\School');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function departments(){
        return $this->hasMany('App\Department');
    }

    public function profilePictures(){
        return $this->morphMany('App\Image', 'imageable');
    }
    
    public function courses(){
        return $this->hasMany('App\Course');
    }
    
    public function downloads(){
        return $this->hasMany('App\Download');
    }
    
    public function previews(){
        return $this->hasMany('App\Preview');
    }
    
    public function courseMaterials(){
        return $this->hasMany('App\CourseMaterial');
    }
}
