<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'FilmTitle', 'film_maker_id', 'duration','link_to_film','commissioning_project','Producer','Director','Film_Poster','plot','Film_Type'
    ];
}
