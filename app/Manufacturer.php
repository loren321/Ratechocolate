<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    public function chocolates()
    {
        return $this->hasMany('App\Chocolate');
    }
}
