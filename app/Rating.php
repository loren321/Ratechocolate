<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function chocolate()
    {
        return $this->belongsTo('App\Chocolate');
    }

    public function author()
    {
        return $this->belongsToo('App\User', 'id', 'author_id');
    }
}
