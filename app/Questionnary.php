<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnary extends Model
{
    //
    protected $fillable = ['date'];

    public function answers(){
        return $this->hasMany('App\Models\Answer');
    }
}
