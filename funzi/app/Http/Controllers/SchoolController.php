<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Darasa;
use Illuminate\Support\Facades\Log;
use \App\User;
use \App\Student;
use \App\Parents;
use \App\School;
use \App\Teacher;
use \App\Subject;
use \App\Teacher_Assign;
use App\Notifications\WelcomeUser;

class SchoolController extends Controller
{
    public function addclass(Request $request)
    {
        return view('class.create_class');
    }
    public function post_class(Request $request)
    {
        $name = $request->standard.''.$request->stream;

        Darasa::updateorCreate([
            'name' => $name
        ]);
        return redirect()->back();
    }
    public function addparent(Request $request,$uniqid=null)
    {
        if($uniqid !== null)
        {
            $student = User::where('uniqid','=',$uniqid)->get()->first();
            $student_details = Student::where('user_id','=',$student->id)->get()->first();
            $class_details = Darasa::find($student_details->class_id);

            return view('student.add_parent',compact('student_details','class_details'));
        }
        else {

            $all_students = User::where('role','=','student')->get();
            $classes = Darasa::get();
            // dd($classes);
            return view('student.add_parent',compact('all_students','classes'));
        }

    }
    public function post_parent(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',

        ]);
      $student_details = Student::find($request->student_id);
        $user = User::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'parent',
            'uniqid' => uniqid()
         ]);

    $parent = Parents::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'children_array' => $request->student_id,
            'user_id' => $user->id,
            'phone_number' => $request->phone_number
         ]);
         $user->notify(new WelcomeUser($user));
         Log::info("Parent Added Successfully");
$request->session()->flash("success", "Parent Added Successfully!");
         return redirect()->route('home');
    }
    public function addteacher(Request $request)
    {
        $school_details = School::where('principal_id','=',\Auth::user()->id)->get()->first();
       return view('school.add_teacher',compact('school_details'));
    }
    public function post_teachers(Request $request)
    {

        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',

        ]);
      $student_details = Student::find($request->student_id);
        $user = User::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'teacher',
            'uniqid' => uniqid()
         ]);

    $teacher = Teacher::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'school_id' => $request->school_id,
            'user_id' => $user->id,
            'phone_number' => $request->phone_number
         ]);
         $user->notify(new WelcomeUser($user));
         Log::info("Teacher Added Successfully");
        $request->session()->flash("success", "Teacher Added Successfully!");
         return redirect()->route('home');
    }
    public function add_subjects(Request $request)
    {
        return view('subject.create_subject');
    }
    public function post_subject(Request $request)
    {
        $subject_add = Subject::updateorCreate([
            'name' => $request->name,
            'uniqid' => uniqid()
        ]);
        Log::info("Subject Added Successfully");
        $request->session()->flash("success", "Subject Added Successfully!");
         return redirect()->back();
    }

}
