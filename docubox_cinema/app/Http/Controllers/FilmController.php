<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use \App\Film;

class FilmController extends Controller
{
    public function add_film(Request $request)
    {
        return view('Films.create_film');
    }
    public function post_film(Request $request)
    {
        $Film_Poster = $request->file('Film_Poster');
        $request->file('Film_Poster')->move(base_path() . '/public/posters', $poster_file = str_replace(" ", "_", '/posters/'.$request->FilmTitle.'_'.\Auth::user()->name.'_poster') . "." . $Film_Poster->getClientOriginalExtension());
        Film::updateorCreate([
            'FilmTitle' => $request->FilmTitle,
            'duration' => $request->duration,
            'link_to_film' => $request->link_to_film,
            'plot' => $request->plot,
            'Film_Poster' => $poster_file,
            'film_maker_id' => Auth::user()->id,
            'Film_Type' => 'normal_type'
        ]);
        return redirect()->route('home');
    }
}
