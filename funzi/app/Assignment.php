<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $fillable = [
        'class_id','subject_id','assignment','instructions','due_date','uniqid','subject_name','class_name'
    ];
}
