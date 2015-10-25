<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Auth;
class Ocena extends Model
{
    protected $table='ocena';
    protected $fillable=['lessonTypeId','userId','jedinica'];



//    public function lectures(){ return $this->hasMany('App\Lessontype','id'); }


}
