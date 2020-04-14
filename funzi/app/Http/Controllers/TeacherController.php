<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Darasa;
use \App\Subject;
use \App\Teacher_Assign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class TeacherController extends Controller
{
    public function set_subjects(Request $request)
    {
        $classes = Darasa::get();

        $subjects = Subject::get();
        return view('teacher.select_subject',compact('classes','subjects'));
    }

    public function subject_teacher_post(Request $request)
    {
        $teacher_assign = Teacher_Assign::updateorCreate([
            'class_id' => $request->class,
            'teacher_id' => Auth::user()->teacher->id,
            'subject_id' => $request->subject
        ]);
        Log::info("Subject And Class Assigned Successfully");
        $request->session()->flash("success", "Subject And Class Assigned Successfully!");
         return redirect()->back();
    }
    public function teacher_home(Request $request)
    {
        return view('teacher.home');
    }
}
