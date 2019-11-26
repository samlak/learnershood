<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'file_path', 'imageable_id', 'imageable_type'
    ];
    public function imageable()
    {
        return $this->morphTo();
    }
}
