<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Notifications\WelcomeUser;
use App\Notifications\SubscriptionConfirmation;
use App\Notifications\PaymentNotification;
use App\Subscription;
use App\UserSubscription;
use Nexmo\Laravel\Facade\Nexmo;

class AdminController extends Controller
{
    public function add_new_user(Request $request)
    {
        return view('admin.add_user');
    }

    public function post_new_user(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'name' => 'required|string|max:255',
            'contact' => 'required|string|max:10|unique:users',

            ]);

        $user = User::updateorCreate([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => Hash::make('qwerty123'),
            'uniqid' => uniqid(),
            'role' => 'customer'
        ]);
        $user->notify(new WelcomeUser($user));
        Log::info($user->name ." Added Successfully");
        $request->session()->flash("success", $user->name ." Added Successfully");
         return redirect()->route('add.customer.subscription');
    }

    public function add_packages(Request $request)
    {
        return view('packages.add_package');
    }

    public function post_package(Request $request)
    {
        // dd($request->name);
        $package = Subscription::updateorCreate([
            'name' => $request->name,
            'internet_speeds' => $request->internet_speeds,
            'price' => $request->price,
            'uniqid' => uniqid(),
            'category' => $request->category
        ]);

        Log::info($package->name ." Added Successfully");
        $request->session()->flash("success", $package->name ." Added Successfully");
        return redirect()->back();

    }

    public function confirm_payments(Request $request)
    {
        $user_subscription = UserSubscription::where('uniqid','=',$request->uniqid)->get()->first();
        $user_details = User::find($user_subscription->user_id);
        $package_details = Subscription::find($user_subscription->package_id);
        return view('packages.confirm_payments',compact('user_subscription','user_details','package_details'));
    }

    public function payments_confirmation_post(Request $request)
    {
        $user_subscription = UserSubscription::find($request->subscription_id);
        $package = Subscription::find($request->package_id);
        $duration_of_subscription = round($request->amount_paid/$package->price).' month(s)';
        $user_subscription->update([
            'amount_paid' => $request->amount_paid,
            'duration_of_subscription' => $duration_of_subscription
        ]);

        $user = User::find($user_subscription->user_id);

        $user->notify(new SubscriptionConfirmation($user,$package,$duration_of_subscription));
        Log::info("User Subscribed Successfully");
        $request->session()->flash("success", "User Subscribed Successfully");
        return redirect()->back();

    }

    public function user_subscriptions(Request $request)
    {
        $user_subscriptions = UserSubscription::get();
        // $users
        return view('admin.user_subscriptions',compact('user_subscriptions'));
    }

    public function send_payment_notification(Request $request)
    {
        $user_subscription = UserSubscription::where('uniqid','=',$request->uniqid)->get()->first();

        $user = User::find($user_subscription->user_id);
        $package = Subscription::find($user_subscription->package_id);

        $user->notify(new PaymentNotification($user,$package));
        Log::info("Notification Sent Successfully");
        $request->session()->flash("success", "Notification Sent Successfully");
        return redirect()->back();

    }

    public function enter_payment_details(Request $request)
    {
        $user_subscription = UserSubscription::where('uniqid','=',$request->uniqid)->get()->first();
        $user_details = User::find($user_subscription->user_id);
        $package_details = Subscription::find($user_subscription->package_id);
        $all_packages = Subscription::get();
        return view('admin.user_payment_details',compact('user_subscription','user_details','package_details','all_packages'));
    }

    public function customer_payment_post(Request $request)
    {
        $user_subscription = UserSubscription::find($request->subscription_id);
        $package = Subscription::find($request->subscription);
        $duration_of_subscription = round($request->amount_paid/$package->price).' month(s)';
        $user_subscription->update([
            'amount_paid' => $request->amount_paid,
            'duration_of_subscription' => $duration_of_subscription
        ]);

        $user = User::find($user_subscription->user_id);

        $user->notify(new SubscriptionConfirmation($user,$package,$duration_of_subscription));
        Log::info("Payment Details Stored Successfully");
        $request->session()->flash("success", "Payment Details Stored Successfully");
        return redirect()->back();
    }

    public function installation_confirmation(Request $request)
    {
        $user = User::where('uniqid','=',$request->uniqid)->get()->first();
        return view('admin.installation',compact('user'));

    }

    public function customer_subscription(Request $request)
    {
        $user_subscription = UserSubscription::get();
        $users_in = [];
        for($i=0;$i<$user_subscription->count();$i++)
        {
            array_push($users_in,$user_subscription[$i]->user_id);
        }
        $users = User::where('role','=','customer')->get();
        $users_no_package = [];
        for($i=0;$i<sizeof($users);$i++)
        {
            if(!in_array($users[$i]->id,$users_in))
            {
                array_push($users_no_package,$users[$i]);
            }
        }


        $packages = Subscription::get();
        return view('admin.customer_add_subscription',compact('packages','users_no_package'));
    }

    public function post_customer_subscription(Request $request)
    {
        $user = User::find($request->user_id);
        $package = Subscription::find($request->package_id);
        $duration_of_subscription = round($request->amount_paid/$package->price);
        $user_subscription = UserSubscription::updateorCreate([
            'user_id' => $request->user_id,
            'user_name' => $user->name,
            'amount_paid' => $request->amount_paid,
            'package_id' => $request->package_id,
            'duration_of_subscription' =>  $duration_of_subscription,
            'uniqid' => uniqid()
        ]);

        Log::info($user_subscription->user_name." Successfully Subscribed to the ".$package->name." package");
        $request->session()->flash("success", $user_subscription->user_name." Successfully Subscribed to the ".$package->name." package");
        return redirect()->back();
    }

    public function upgrade_package(Request $request)
    {
        $user_subscription = UserSubscription::where('uniqid','=',$request->uniqid)->get()->first();
        $user = User::find($user_subscription->user_id);
        $packages = Subscription::get();
        return view('upgrade_package',compact('user','packages','user_subscription'));
    }

    public function upgrade_package_post(Request $request)
    {
        $user = User::where('uniqid','=',$request->user_uniqid)->get()->first();
        $package = Subscription::find($request->package_id);
        $duration_of_subscription = round($request->amount_paid/$package->price).' month(s)';
        $user_subscription = UserSubscription::where('user_id','=',$user->id)->update(['package_id' => $request->package_id,'amount_paid' => $request->amount_paid,'duration_of_subscription' => $request->duration]);
        Log::info($user->name." Successfully Upgraded to the ".$package->name." package");
        $request->session()->flash("success", $user->name." Successfully Upgraded to the ".$package->name." package");
        return redirect()->back();
     }


}
