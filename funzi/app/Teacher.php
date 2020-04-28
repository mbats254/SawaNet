<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name', 'email','user_id','school_id','phone_number','uniqid'
    ];  //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
