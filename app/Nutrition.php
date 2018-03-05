<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutrition extends Model
{
    public function chocolate()
    {
        return $this->hasOne('App\Chocolate');
    }
}
