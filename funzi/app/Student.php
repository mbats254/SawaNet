<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'email','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function class()
    {
        return $this->belongsTo('App\Darasa');
    }
}
