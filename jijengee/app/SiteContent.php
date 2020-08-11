<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContent extends Model
{
    //field_array
    protected $fillable = [
        'field_array','uniqid','theme_location'
    ];
}
