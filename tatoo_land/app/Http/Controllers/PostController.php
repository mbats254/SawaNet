<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \App\Land;

class PostController extends Controller
{
   public function land_post(Request $request)
   {
    $image_one = $request->file('image_one')->store('public/land_photos');
    $image_two = $request->file('other_photo')->store('public/land_photos');
       Land::updateOrCreate([
           'name' => $request->name,
            'location' => $request->location,
            'main_photo' => $image_one,
            'other_photos' => $image_two,
            'property_size' => $request->property_size,
            'features' => $request->features
       ]);
       Log::info("Land Posted Successfully");
        $request->session()->flash("success", "Land Posted Successfully!");
        return redirect()->route('welcome');

   }
}
