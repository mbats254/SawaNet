<?php

namespace App\Http\Controllers;

use App\Subscription;
use Illuminate\Http\Request;
use \App\User;
use \App\UserSubscription;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Notifications\UserSubscriptionNotification;
use App\Notifications\AdminSubscriptionNotification;

class UserController extends Controller
{
    public function set_credentials(Request $request)
    {
       $user = User::where('uniqid','=',$request->uniqid)->get()->first();
       return view('user.set_credentials',compact('user'));
    }

    public function credentials_post(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|',
            'confirm_password' => 'same:password'
            ]);

      $user = User::where('email','=',$request->email)->get()->first();
      User::where('email','=',$request->email)->update([
          'password' => Hash::make($request->password)
      ]);
      Log::info("Password Created Successfully. Now You can login into your account");
      $request->session()->flash("success", "Password Created Successfully. Now You can login into your account");
       return redirect()->route('login');
    }

    public function all_packages(Request $request)
    {
        $subscriptions = Subscription::get();
        return view('packages.all_subscriptions',compact('subscriptions'));
    }

    public function subscribe_package(Request $request)
    {
        $package  = Subscription::where('uniqid','=',$request->uniqid)->get()->first();
        $user_subscription = UserSubscription::updateorCreate([
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'package_id' => $package->id,
            'uniqid' => uniqid()
        ]);

        $user = User::find(Auth::user()->id);
        $user->notify(new UserSubscriptionNotification($user,$package));
        $admins = User::where('role','=','admin')->get();
        for($i=0;$i<sizeof($admins);$i++)
        {
            $admin = $admins[$i];
            $admin->notify(new AdminSubscriptionNotification($admin,$user,$package,$user_subscription));

        }
        Log::info("Subscription Successful. Please wait for approval from the System Admin");
        $request->session()->flash("success", "Subscription Successful. Please wait for approval from the System Admin");
        return redirect()->back();
    }

}
