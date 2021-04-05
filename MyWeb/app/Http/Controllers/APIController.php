<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class APIController extends Controller
{
    // return all posts

    public function index(Request $request){
        $posts = Post::all();
        return response($posts,200);
    }
    //get post
    public function get_post(Request $request){
        $post = Post::find($request->id);

        if($post ==null){
            return response(['message'=>'No such post found'],404);
            }
            return response($post,200);
    } 
}
