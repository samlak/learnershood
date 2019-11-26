<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'school_id', 'user_id', 'full_name', 'short_name', 'logo'
    ];
    
    public function school(){
        return $this->belongsTo('App\School');
    }

    public function logos(){
        return $this->morphMany('App\Image', 'imageable');
    }
    
    public function courses(){
        return $this->hasMany('App\Course');
    }

    public function courseMaterials(){
        return $this->hasMany('App\CourseMaterial');
    }
}
