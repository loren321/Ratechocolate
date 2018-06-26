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
        return $this->belongsTo('App\User', 'author_id', 'id');
    }
}
