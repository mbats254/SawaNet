<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use \App\User;
use \App\ContactUs;
use \App\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Notifications\Contact;
class UserController extends Controller
{
    //

    public function verify_email(Request $request,$uniqid)
    {
        $user = User::where('uniqid','=',$uniqid)->get()->first();
        $current_time = date("h:i:sa");
        $time_format = date_create($current_time);
         User::where('uniqid','=',$uniqid)->update(['email_verified_at' => $time_format]);
         $user = User::find($user->id);

         Auth::login($user);
        // return redirect()->route('home');
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
    public function contact_us(Request $request)
    {

        $contact_us = ContactUs::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'school_type' => $request->school_type,
            'uniqid' => uniqid(),

        ]);

        $admin = Admin::get();
        for($i=0;$i<$admin->count();$i++)
        {
            $this_admin = $admin[$i];
            $this_admin->notify(new Contact($this_admin,$contact_us));
        }
        Log::info("Posted Successfully");
        $request->session()->flash("success", "Subscription Successful");
      return redirect()->back();
        //
    }
}
