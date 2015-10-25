<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function lessontype(){

        return $this->belongsTo('App\Lessontype');
    }

    public function user(){

        return $this->belongsToMany('App\User')->withPivot('status_id')
            ->join('statuses', 'statuses.id', '=', 'lesson_user.status_id')->select(['statuses.status', 'users.*']);
    }
}
