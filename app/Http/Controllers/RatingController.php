<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\RatingResource;
use App\Rating;

class RatingController extends Controller
{
    public function showChocolateRatings($chocolate_id)
    {
        return RatingResource::collection(Rating::all()); // TODO fix this so it only
    }
}
