<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = [
        'user_id', 'course_material_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function courseMaterial(){
        return $this->belongsTo('App\CourseMaterial');
    }

}
