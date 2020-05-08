<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostedAssignments extends Model
{
    //$table->string('assignment');
    // $table->string('student_id');
    // $table->string('uniqid');
    protected $fillable = [
        'assignment', 'student_id','assignment_id','subject_id','class_id','uniqid'
    ];
}
