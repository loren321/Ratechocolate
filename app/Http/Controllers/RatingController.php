<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\RatingResource;
use App\Rating;

class RatingController extends Controller
{
    public function showChocolateRatings($chocolate_id)
    {
        return RatingResource::collection(Rating::where('chocolate_id', $chocolate_id)->get()); // TODO fix this so it only
    }

    public function showRating($id)
    {
        return new RatingResource(Rating::find($id));
    }

    public function showChocolateRatingsWeb($chocolate_id)
    {
      $ratings = Rating::where('chocolate_id', $chocolate_id)->get();
      return view('chocolate-ratings', ['ratings' => $ratings]);
    }
}
