<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //
    public function gallery(){
        return $this->hasMany('App\Gallery');
    }

    public function techs(){
        return $this->hasMany('App\Technoliges');
    }

}
