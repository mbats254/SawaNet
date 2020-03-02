<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Land;

class PropertyController extends Controller
{
    public function all_properties(Request $request)
    {
     $land_pieces = Land::all();
    return view('property.all_property',compact('land_pieces'));

    }
    public function create_property(Request $request)
    {
        $property = Land::all();
        return view('property.create_property',compact('property'));
    }
}
