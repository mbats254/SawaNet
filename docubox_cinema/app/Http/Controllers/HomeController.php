<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Film;

class HomeController extends Controller
{
    public function index()
    {
        $films = Film::get();
         return view('home',compact('films'));
    }
}
