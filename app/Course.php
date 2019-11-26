<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'school_id', 'department_id', 'user_id', 'code', 'title', 'description', 'logo', 'tags'
    ];
    
    public function school(){
        return $this->belongsTo('App\School');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function logos(){
        return $this->morphMany('App\Image', 'imageable');
    }
    
    public function courseMaterials(){
        return $this->hasMany('App\CourseMaterial');
    }

    public function courseContent(){
        return $this->hasOne('App\CourseContent');
    }
}
