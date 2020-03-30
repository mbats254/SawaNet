<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'name', 'email','children_array'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
