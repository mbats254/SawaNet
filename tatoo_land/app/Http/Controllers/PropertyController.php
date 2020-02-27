<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Land;

class PropertyController extends Controller
{
    public function all_properties(Request $request)
    {
     $land_pieces = Land::all();
     dd($land_pieces);

    }
}
