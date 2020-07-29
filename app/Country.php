<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function articles(){
        return $this->hasManyThrough('App\Article','App\User');
    }
}
