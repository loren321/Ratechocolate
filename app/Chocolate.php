<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chocolate extends Model
{
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }

    public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function manufacturer()
    {
        return $this->belongsTo('App\Manufacturer');
    }

    public function nutrition()
    {
        return $this->belongsTo('App\Nutrition');
    }

    public function ingredients()
    {
        return $this->belongsToMany('App\Ingredient', 'choco_to_ingredients');
    }
}
