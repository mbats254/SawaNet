<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    public $successStatus = 200;

    public function list_users()
    {
        $users = User::get();
        return response()->json(['success' => 'users'], $this-> successStatus);

    }
}
