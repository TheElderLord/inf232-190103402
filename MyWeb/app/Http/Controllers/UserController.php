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
    public function store_user(Request $request){
       User::create([
           'id'=>100,
           'name'=> $request->name,
           'surname'=> $request->surname,
           'email'=> $request->email,
           'image'=> $file = $request->file('image')
       ]);
       return back();
    }
}
