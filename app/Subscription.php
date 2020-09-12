<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{

    protected $fillable = [
        'name', 'price','internet_speeds','uniqid','category'
    ];
}
