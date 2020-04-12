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
        $categories = Category::all();
        return view('property.create_property',compact('property','categories'));
    }
    public function property_details(Request $request,$uniqid)
    {
        $property_details = \DB::table('lands')->where('uniqid','=',$uniqid)->get()->first();
         return view('property.property_page',compact('property_details'));
    }
    public function displayImage(Request $request,$filename)
   {

    $path = storage_public('land_photos/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
   }
}
