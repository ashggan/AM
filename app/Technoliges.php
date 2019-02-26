<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technoliges extends Model
{
    //
    public function projects_techs(){
        return $this->BelongsToMany('App\Projects');
    }
}
