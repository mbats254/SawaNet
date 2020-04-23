<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\School;
use \App\Assignment;
use \App\Lesson;
use \App\Darasa;
use \App\Student;
use \App\User;
use \App\Subject;
use App\Notifications\WelcomeUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
     public function addstudent(Request $request)
     {
         $schools = School::all();
         $classes = Darasa::all();
         return view('student.create_student',compact('schools','classes'));
     }
     public function post_student(Request $request)
     {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',

        ]);
         $user = User::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'student',
            'uniqid' => uniqid()
         ]);

$student =  Student::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'class_id' => $request->class,
            'user_id' => $user->id
         ]);

         $user->notify(new WelcomeUser($user));
         Log::info("Student Added Successfully");
$request->session()->flash("success", "Student Added Successfully!");
         return redirect()->route('add.new.parent',$user->uniqid);
     }
     public function student_home(Request $request)
     {
         return view('student.home');
     }
     public function parent_home(Request $request)
     {
         return view('parent.home');
     }
     public function children_array(Request $request)
     {
         $parent = Auth::user()->parent;
         $children = [];
         $array = explode(',',$parent->children_array);
         for($i=0;$i<sizeof($array);$i++)
         {
             $student_details = Student::find($array[$i]);
             array_push($children,$student_details);
         }
        return view('parent.children_array',compact('parent','children'));
     }
     public function view_assignment(Request $request,$uniqid)
     {
        $assignment = Assignment::where('uniqid','=',$uniqid)->get()->first();
        $subject = Subject::find($assignment->subject_id);
        return view('subject.view_assignment',compact('assignment','subject'));
     }
     public function view_lesson(Request $request,$uniqid)
     {
        $lesson = Lesson::where('uniqid','=',$uniqid)->get()->first();
        $subject = Subject::find($lesson->subject_id);
        return view('subject.view_lesson',compact('lesson','subject'));
     }
     public function all_lessons(Request $request)
     {
         $student = Auth::user()->student;
         $class = Darasa::find($student->class_id);
         $lessons = Lesson::where('class_id','=',$class->id)->get();
         return view('student.all_lessons',compact('lessons'));

     }
     public function all_assignments(Request $request)
     {
         $student = Auth::user()->student;
         $class = Darasa::find($student->class_id);
         $assignments = Assignment::where('class_id','=',$class->id)->get();
         return view('student.all_assignments',compact('assignments'));

     }

}
