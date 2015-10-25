<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lessontype extends Model
{
    public $timestamps = false;

    public function lesson(){

        return $this->hasMany('App\Lesson');
    }


}
