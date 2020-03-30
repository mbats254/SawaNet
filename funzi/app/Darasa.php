<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darasa extends Model
{
    protected $fillable = [
        'name', 'subject_array','school_id'
    ];
    public function student()
    {
        return $this->hasOne('App\Student','class_id');
    }
    public function school()
    {
        return $this->belongsTo('App\School');
    }

}
