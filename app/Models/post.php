<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

//this class finds and retrieves a post based on its class

class Post{
   // public $title;

   // public $excerpt;

   // public $date;

   // public  $body;

   // public $slug;

   // public function __construct($title, $excerpt, $date, $body, $slug)
   // {
   //    $this->title= $title;
   //    $this->excerpt= $excerpt;
   //    $this->date= $date;
   //    $this->body= $body;
   //    $this->slug= $slug;

   // }
     
   public static function all(){
// -----------------------------------------------------
         // return cache()->rememberForever('posts.all', function(){//this remembers the cache forever 

         //return collect(File::files(resource_path("posts"))) //this collects the file from the path 
//         ->map(fn($file) => YamlFrontMatter::parseFile($file))
//         ->map(fn($document) => new Post(             //this creates a new post of the parsed file
//             $document->title,
//             $document->excerpt,
//             $document->date,
//             $document->body(),
//             $document->slug
//         ));
               // ->sortBy('date')


         // })
// ------------------------------------------------


      $files= File::files(resource_path("posts/"));

      return array_map(function ($file){

         return $file->getContents();

      }, $files);
   }

   public static function find($slug){
      // this function finds a post by its slug 
         if(! file_exists($path= (resource_path("posts/{$slug}.html")))){
            throw new ModelNotFoundException();
         }

         return cache()->remember("posts.{$slug}",3600,fn() =>file_get_contents($path));
            
// --------------------------------------------------------
            // return static::all()->firstWhere('slug', $slug);

   } 

   
}

