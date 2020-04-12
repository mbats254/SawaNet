<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name','principal_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function class()
    {
        return $this->hasOne('App\Darasa','school_id');
    }
    public function principal()
    {
        return $this->hasOne('App\User','principal_id');
    }
}
