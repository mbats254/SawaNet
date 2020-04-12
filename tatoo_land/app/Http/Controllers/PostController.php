<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use \App\Land;
use \App\Category;

class PostController extends Controller
{
   public function land_post(Request $request)
   {
    $uniqid = uniqid();
    $image_one = $request->file('image_one');
    $request->file('image_one')->move(base_path() . '/public/land_photos/', $path = str_replace(" ", "_",'main_photo_'.$request->name . $uniqid ) . "." . $image_one->getClientOriginalExtension());
    $other_photo = $request->file('other_photo');
    $request->file('other_photo')->move(base_path() . '/public/land_photos/', $path2 = str_replace(" ", "_", 'other_photo_'.$request->name . $uniqid ) . "." . $other_photo->getClientOriginalExtension());


    // dd($uniqid);
       Land::updateOrCreate([
           'name' => $request->name,
            'location' => $request->location,
            'main_photo' => $path,
            'other_photos' => $path2,
            'property_size' => $request->property_size,
            'features' => $request->features,
            'uniqid' => $uniqid
       ]);
       Log::info("Land Posted Successfully");
        $request->session()->flash("success", "Land Posted Successfully!");
        return redirect()->route('welcome');

   }
   public function category_post(Request $request)
   {

          Category::updateOrCreate([
           'size_in_acres' => $request->size_in_acres,

       ]);
       return redirect()->back();
   }
}
