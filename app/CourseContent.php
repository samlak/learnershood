<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseContent extends Model
{
    protected $fillable = [
        'course_id', 'article', 'video','book'  
    ];
    
    public function course(){
        return $this->belongsTo('App\Course');
    }
}
