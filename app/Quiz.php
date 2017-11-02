<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
   /*
   *
   * Table associated with the model
   *
   **/
    protected $table =  'quizzes';

    /**
    *
    * Get questions associated with the Quiz
    *
    */
    public function questions() 
    {
        return $this->hasMany('App\Question');
    }
}
