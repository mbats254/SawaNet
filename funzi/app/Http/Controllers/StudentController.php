<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
     public function addstudent(Request $request)
     {
         return view('student.create_student');
     }
}
