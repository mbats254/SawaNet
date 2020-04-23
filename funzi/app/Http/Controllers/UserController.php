<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //

    public function create_teachers(Request $request)
    {

    }

    public function set_credentials(Request $request,$uniqid)
    {
       $user = User::where('uniqid','=',$uniqid)->get()->first();
       return view('user.set_credentials',compact('user'));
    }
    public function post_credentials(Request $request)
    {
        $password = Hash::make($request->password);
        $user = User::where('uniqid','=',$request->uniqid)->get();
        // dd($user);
        User::where('uniqid', $request->uniqid)
        ->update([
            'password' => $password

        ]);
        // Auth::login($user);
        Log::info("Password Set Successfully");
        $request->session()->flash("success", "Password Set Successfully! Now Login to your account");
      return redirect()->route('home');


    }
}
