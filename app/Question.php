<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = ['description', 'chapter_id'];

    public function chapter(){
        return $this->belongsTo('App\Models\Chapter');
    }

    public function answers(){
        return $this->hasMany('App\Models\Answer');
    }
}
