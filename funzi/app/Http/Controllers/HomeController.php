<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $role = Auth::user()->role;

   if($role == 'principal')
   {

    if(Auth::user()->status == 0)
    {
        return view('auth.verify');
    }else {

        return view('home');
    }

   }else if($role == 'teacher')
   {
        return redirect()->route('teacher.home');
   }else if($role == 'student')
   {
        return redirect()->route('student.home');
   }
   else if($role == 'parent')
   {
        return redirect()->route('parent.home');
   }
   else if($role == 'admin')
   {
        return redirect()->route('admin.home');
   }

    }
}
