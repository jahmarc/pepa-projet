<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $fillable = ['name', 'number'];


    public function questions(){
    return $this->hasMany('App\Models\Question');
    }
}