<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

//this class finds and retrieves a post based on its class

class Post{
     

   public static function find($slug){
         if(! file_exists($path= (resource_path("posts/{$slug}.html")))){
            throw new ModelNotFoundException();
         }

         return cache()->remember("posts.{$slug}",3600,fn() =>file_get_contents($path));


   } 
}

