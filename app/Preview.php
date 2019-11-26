<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    protected $fillable = [
        'user_id', 'ip_address', 'course_material_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function courseMaterial(){
        return $this->belongsTo('App\CourseMaterial');
    }
}
