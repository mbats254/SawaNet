<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Darasa;

class SchoolController extends Controller
{
    public function addclass(Request $request)
    {
        return view('class.create_class');
    }
    public function post_class(Request $request)
    {
        $name = $request->standard.''.$request->stream;

        Darasa::updateorCreate([
            'name' => $name
        ]);
        return redirect()->back();
    }
}
