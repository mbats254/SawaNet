<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //table_name
    protected $fillable = [
        'table_name','uniqid','field_array','theme_location'
    ];
}
