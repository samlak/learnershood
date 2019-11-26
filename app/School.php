<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'full_name', 'user_id', 'short_name', 'logo'
    ];

    public function images(){
        return $this->morphMany('App\Image', 'imageable');
    }

    public function departments(){
        return $this->hasMany('App\Department');
    }

    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function courseMaterials(){
        return $this->hasMany('App\CourseMaterial');
    }
}
