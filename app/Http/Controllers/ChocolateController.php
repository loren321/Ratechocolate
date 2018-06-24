<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Chocolate;
use App\Http\Resources\ChocolateResource;

class ChocolateController extends Controller
{
    public function showAll()
    {
        return ChocolateResource::collection(Chocolate::all());
    }

    public function show($id)
    {
        return new ChocolateResource(Chocolate::find($id));
    }
}
