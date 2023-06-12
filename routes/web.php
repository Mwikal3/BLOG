<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/', function(){

    return view('posts',[
        'posts'=> Post::all()
    ]);
});

Route::get('posts/{post}', function($slug){
    //this finds a post by its slug and passes it to a view called post 
    return view('post',[
        'post'=>Post::find($slug)
    ]);

})->where('post', '[A-z_\-]+');

  
    
