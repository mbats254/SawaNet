<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
        'class_id', 'subject_id', 'lesson','lesson_video','uniqid','instructions','subject_name','class_name','due_date','lesson_title'
    ];

}
