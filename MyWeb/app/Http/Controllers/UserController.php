<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function user_list(){
        $users = User::all();
        return view('user.user')-> with(['user'=> $users]);

    }
}
