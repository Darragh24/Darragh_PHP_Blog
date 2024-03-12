<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Locations;

class LocationsController extends Controller
{
 public function index()
 {
  $locations = Locations::all();
  return view('locations', compact('locations'));
 }
}
