<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        return view('posts.index')->with(['posts'=>$posts]);

    }
    public function create_post(Request $request){
        Post::create([
            'title'=>$request->title,
            'body'=> $request->body
        ]);
        
    return back();
}
public function get_posts($id){
$post=Post::find($id);
if($post == null)
return response(['message' =>'post not found'],404);
return view('posts.detail')-> with(['post'=> $post]);
}

}
