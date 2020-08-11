<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    //$table->string('name');
    // $table->string('theme_image');
    // $table->string();
    protected $fillable = [
        'name', 'theme_image', 'theme_location','uniqid'
    ];
}
