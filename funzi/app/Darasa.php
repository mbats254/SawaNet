<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darasa extends Model
{
    protected $fillable = [
        'name', 'subject_array'
    ];
    public function student()
    {
        return $this->hasOne('App\Student','class_id');
    }
}
