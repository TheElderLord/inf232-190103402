<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main',function(){
return view('main');
})->name('main');

Route::get('/about',function() {
return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('post/create',function(){
  DB::table('city')->insert([
      'id'=> 112,
     'title'=>'CA',
     'body'=>'Canada'
]);
  
});

Route::get('post',function(){
$post = Post::find(111);
return $post;
});

Route::get('blog/index',[BlogController::class,'index']);

Route::get('blog/create',function(){
    return view('posts.create');
});

Route::post('blog/create',[BlogController::class, 'create_post'])->name('create-post');

Route::get('post/{id}', [BlogController::class, 'get_posts']);