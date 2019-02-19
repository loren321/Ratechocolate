<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Manufacturer;

class ManufacturerController extends Controller
{
    public function showManufacturerWeb($manufacturer_id)
    {
      $manufacturer = Manufacturer::where('id', $manufacturer_id)->first();
      return view('manufacturer', ['manufacturer' => $manufacturer]);
    }
}
