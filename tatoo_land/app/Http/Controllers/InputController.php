<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    //
    public function category_input(Request $request)
    {
        return view('property.create_categories');
    }
}
