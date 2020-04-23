<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;
use \App\School;

class AdminController extends Controller
{
   public function admin_home(Request $request)
   {

       return view('admin.home');
   }
   public function approve_account(Request $request,$id)
   {
    $school = School::find($id);
    $user = User::where('id','=',$school->principal_id)->update(['status' => 1]);
    Log::info("Account Approved Successfully");
    $request->session()->flash("success", "Account Approved Successfully!");
    return back();

   }
   public function view_unapproved(Request $request)
   {
       $unapproved = User::where('status','=',0)->where('role','=','principal')->get();

       $schools = [];
       for($i=0;$i<sizeof($unapproved);$i++)
       {
           $school = School::where('principal_id','=',$unapproved[$i]->id)->get()->first();
           array_push($schools,$school);
       }
     return view('admin.view_unapproved',compact('schools','unapproved'));
   }
}
