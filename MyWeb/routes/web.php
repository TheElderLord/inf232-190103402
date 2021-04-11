<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Http\Controllers\BlogController;
use App\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
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

Route::get('user/creat',function(){
    DB::table('user')->insert([
        'id'=>115,
      'name' => 'Arsen',
      'surname'=>'Myngbayev',
      'email' => 'Holy.s.hit9137@gmail.com',
      'image' =>  'KK'
    ]); 
});

Route::get('user',function(){
    $user = User::find(1);
    return $user;
    });

Route::get('user/list',[UserController::class,'user_list']);


Route::get('user/create',function(){
    return view('user.create');
});

Route::post('user/create',[UserController::class,'store_user'])->name('create_user');

Route::view('upload', 'upload');
Route::post('upload',[UploadController::class,'index']);

