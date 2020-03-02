<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $fillable = [
        'name', 'location', 'property_size','features','map','main_photo','other_photos'
    ];
}
