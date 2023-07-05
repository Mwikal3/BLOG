<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('posts');
// });



Route::get('/', function(){

    return view('posts',[
        'posts'=> Post::latest()->with('category', 'author')->get() 
    ]);
});

Route::get('posts/{post:slug}', function(Post $post){//Post::where ('slug',$post)->firstOrFail()
    //this finds a post by its slug and passes it to a view called post 
    return view('post',[
        'post'=>$post
    ]);

});
// ->where('post', '[A-z_\-]+');

Route::get('categories/{category:slug}', function(Category $category)
{
    return view('posts',[
        'posts'=> $category->posts
    ]);

});

Route::get('authors/{author:username}', function(User $author)
{
    return view('posts',[
        'posts'=> $author->posts
    ]);

});

  
    
