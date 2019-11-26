<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseMaterial extends Model
{
    protected $fillable = [
        'user_id', 'course_id', 'department_id', 'school_id', 'token', 'file_path', 'cover_image', 'file_size', 'file_type', 'name'
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function department(){
        return $this->belongsTo('App\Department');
    }

    public function school(){
        return $this->belongsTo('App\School');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function coverImage(){
        return $this->morphTo('App\Image', 'imageable');
    }
    
    public function downloads(){
        return $this->hasMany('App\Download');
    }
    
    public function previews(){
        return $this->hasMany('App\Preview');
    }
}
