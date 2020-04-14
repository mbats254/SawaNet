<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher_Assign extends Model
{
     protected $fillable = [
        'class_id', 'teacher_id','subject_id'
    ];
}
