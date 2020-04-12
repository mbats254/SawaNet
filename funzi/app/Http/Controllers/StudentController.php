<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\School;
use \App\Darasa;
use \App\Student;
use \App\User;
use App\Notifications\WelcomeUser;

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
         return redirect()->route('add.new.parent',$user->uniqid);
     }
}
