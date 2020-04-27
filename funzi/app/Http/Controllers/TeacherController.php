<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Darasa;
use \App\Subject;
use \App\Student;
use \App\Teacher_Assign;
use \App\Assignment;
use \App\Lesson;
use \App\Parents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Notifications\Assignment_Sent;
use App\Notifications\AssignmentSentParent;
use App\Notifications\Lesson_Sent;
use App\Notifications\LessonPostedParent;
use Carbon\Carbon;

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
        $class = Darasa::find($request->class);
        $subject = Subject::find($request->subject);
        $teacher_assign = Teacher_Assign::updateorCreate([
            'class_id' => $request->class,
            'teacher_id' => Auth::user()->teacher->id,
            'subject_id' => $request->subject,
            'subject_name' => $subject->name,
            'class_name' => $class->name
        ]);
        Log::info("Subject And Class Assigned Successfully");
        $request->session()->flash("success", "Subject And Class Assigned Successfully!");
         return redirect()->back();
    }
    public function teacher_home(Request $request)
    {
        return view('teacher.home');
    }
    public function select_class(Request $request)
    {
        // dd(Auth::user()->teacher->id);
        $teacher_assign = Teacher_Assign::where('teacher_id','=',Auth::user()->teacher->id)->get();
        // $classes = [];
        // $subjects = [];
        // for($i=0;$i<sizeof($teacher_assigns);$i++)
        // {
        //     $class = Darasa::find($teacher_assigns[$i]->class_name);
        //     $subject = Subject::find($teacher_assigns[$i]->subject_name);
        //     array_push($classes,$class);
        //     array_push($subjects,$subject);
        // }

        return view('teacher.select_class',compact('teacher_assign'));
    }
    public function upload_assignment(Request $request,$class_id,$subject_id)
    {
        $class = Darasa::find($class_id);
        $subject = Subject::find($subject_id);
        return view('teacher.upload_assignment',compact('class','subject'));
    }
    public function post_assignment(Request $request)
    {
        $uniqid = uniqid();
        if ($request->file('assignment') !== null) {
            $assignment = $request->file('assignment');
            $request->file('assignment')->move(base_path() . '/public/pdf/assignments', $assign_file = str_replace(" ", "_", '/pdf/assignments/'.$request->class_name.'_'.$request->subject_name.'_'.$uniqid.'_Assignment') . "." . $assignment->getClientOriginalExtension());
        }
        else {
            $assign_file = null;
        }

        $assignment = Assignment::updateorCreate([
            'subject_id' => $request->subject_id,
            'class_id' => $request->class_id,
            'assignment' => $assign_file,
            'instructions' => $request->instructions,
            'due_date' => $request->due_date,
            'subject_name' => $request->subject_name,
            'class_name' => $request->class_name,
            'uniqid' => $uniqid
        ]);
        $students = Student::where('class_id','=',$request->class_id)->get();
        $subject = Subject::find($request->subject_id);
        $date = date("d M Y", strtotime($request->due_date));

        for($i=0;$i<sizeof($students);$i++)
        {

            $i_student = $students[$i];
            $parent = Parents::find($i_student->parent_id);
            $i_student->notify(new Assignment_Sent($assignment,$i_student,$subject,$date));
            $parent->notify(new AssignmentSentParent($assignment,$i_student,$subject,$date));
        }

        Log::info("Assignment posted Successfully");
        $request->session()->flash("success", "Assignment posted Successfully!");
         return redirect()->back();
    }
    public function upload_lesson(Request $request,$class_id,$subject_id)
    {
        $class = Darasa::find($class_id);
        $subject = Subject::find($subject_id);
        return view('teacher.upload_lesson',compact('class','subject'));
    }
    public function post_lesson(Request $request)
    {
        $uniqid = uniqid();
        if($request->file('lesson') !== null)
        {
        $lesson = $request->file('lesson');
         $request->file('lesson')->move(base_path() . '/public/pdf/lessons', $lesson_file = str_replace(" ", "_",'/pdf/lessons/'.$request->class_name.'_'.$request->subject_name.'_'.$uniqid.'_Assignment') . "." . $lesson ->getClientOriginalExtension());
        }
        else {
            $lesson_file = null;
        }
        if($request->file('lesson_video') !== null)
        {
            $lesson_vid = $request->file('lesson_video');
         $request->file('lesson_video')->move(base_path() . '/public/pdf/lessons', $lesson_video = str_replace(" ", "_",'/pdf/lessons/'.$request->class_name.'_'.$request->subject_name.'_'.$uniqid.'_lesson_video') . "." . $lesson_vid ->getClientOriginalExtension());
        }
        else {
            $lesson_video = null;
        }

        $lesson = Lesson::updateorCreate([
            'lesson_title' => $request->lesson_title,
            'subject_id' => $request->subject_id,
            'class_id' => $request->class_id,
            'lesson' => $lesson_file,
            'lesson_video' => $lesson_video,
            'instructions' => $request->instructions,
            'due_date' => $request->due_date,
            'uniqid' => $uniqid,
            'subject_name' => $request->subject_name,
            'class_name' => $request->class_name,
        ]);
        $students = Student::where('class_id','=',$request->class_id)->get();
        $subject = Subject::find($request->subject_id);
        $date = date("d M Y", strtotime($request->due_date));

        for($i=0;$i<sizeof($students);$i++)
        {

            $i_student = $students[$i];
            $parent = Parents::find($i_student->parent_id);
            $parent->notify(new LessonPostedParent($lesson,$i_student,$subject,$date));
            $i_student->notify(new Lesson_Sent($lesson,$i_student,$subject,$date));
        }
        Log::info("Lesson posted Successfully");
        $request->session()->flash("success", "Lesson posted Successfully!");
         return redirect()->back();
    }
}
