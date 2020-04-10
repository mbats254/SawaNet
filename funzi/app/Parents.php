<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'name', 'email','children_array','user_id','phone_number'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
