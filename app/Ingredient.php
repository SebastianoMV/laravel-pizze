<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function pizzas(){
        return $this->belongsToMany('App\Pizza');
    }
}
