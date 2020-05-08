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
use \App\PostedAssignments;

class StudentController extends Controller
{
     public function addstudent(Request $request)
     {
         $school = School::where('principal_id','=',Auth::user()->id)->get()->first();
         $schools = School::all();
         $classes = Darasa::where('school_id','=',$school->id)->get();

         return view('student.create_student',compact('school','classes'));
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
            'user_id' => $user->id,
            'uniqid' => uniqid()
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
     public function student_details(Request $request,$uniqid)
     {
         $student_details = Student::where('uniqid','=',$uniqid)->get()->first();
         $lessons = Lesson::where('class_id','=',$student_details->class_id)->get();
         $assignments = Assignment::where('class_id','=',$student_details->class_id)->get();
         return view('parent.student_details',compact('student_details','assignments','lessons'));
     }
     public function send_assignments(Request $request,$uniqid)
     {
        $assignment = Assignment::where('uniqid','=',$uniqid)->get()->first();
        if(strtotime($assignment->due_date) - time() < 0)
        {
            Log::info("You can`t post the Assignment");
            $request->session()->flash("error", "Deadline has Passed. You can`t post the Assignment!");
            return redirect()->back();
        }
        else {
            $student = \Auth::user();
           return view('student.post_assignment',compact('student','assignment'));
        }
     }
     public function send_assignments_post(Request $request)
     {

         $class = Darasa::find(\Auth::user()->student->class_id);
         $assignment_post = Assignment::where('uniqid','=',$request->assignment_uniqid)->get()->first();
        $subject = Subject::find($assignment_post->subject_id);
        $assignment = $request->file('assignment');
        $request->file('assignment')->move(base_path() . '/public/pdf/posted_assignments', $assign_file = str_replace(" ", "_", '/pdf/posted_assignments/'.Auth::user()->student->name.'_'.$class->name.'_'.$subject->name.'_'.$request->assignment_uniqid.'_Assignment') . "." . $assignment->getClientOriginalExtension());

        PostedAssignments::updateorCreate([
            'assignment' => $assign_file,
            'student_id' => Auth::user()->student->id,
            'class_id' => $class->id,
            'subject_id' => $subject->id,
            'uniqid' => uniqid(),
            'assignment_id' => $assignment_post->id

         ]);

         return redirect()->route('home');
         Log::info("Assignment Posted Successfully. Wait for Teacher`s review");
         $request->session()->flash("success", "Assignment Posted Successfully. Wait for Teacher`s review!");
     }
}
