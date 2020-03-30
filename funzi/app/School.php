<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name','principal_id','user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
