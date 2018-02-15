<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['idQuestion', 'choice', 'idQuestionnary'];

    public function question(){
        return $this->belongsTo('App\Models\Question');
    }

    public function questionnary(){
        return $this->belongsTo('App\Models\Questionnary');
    }
}
