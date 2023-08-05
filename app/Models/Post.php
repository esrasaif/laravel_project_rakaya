<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    //  atrributes
    public $title ; 
    public $excerpt ; 
    public $date ;
    public $body ; 
    public $slug   ; 


     public function __construct($title,$excerpt,$date , $body, $slug  )
     {
        $this->title=$title;
        $this->excerpt=$excerpt;
        $this->date=$date;
        $this->body=$body;
        $this->slug=$slug;




        
     }
    
















    // methods
   public static function find($slug)
   {


    // //   check if this file path exists
    if (!file_exists( $path = resource_path("posts/{$slug}.html"))) {
       throw new ModelNotFoundException() ;
    }

    // // fetch the file data and store it inside the cach for specifi time
    return cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path) );



   }
   //end find fun


// this function to fetch all files of posts 
   public static function all()
   {
  
    $files= File::files(resource_path("posts/"));
    // using collect function from collections
    return collect($files)
    // loop over files and store the value in file variable then the function will extract the meta from file then will build object of  post class and store the metaadata which fetch it from file into the attributes that inside post object 
    ->map(function($file)
        {    
            $document= YamlFrontMatter::parseFile($file);  //here we extract the metadata from file using pasrefile method and storing it in document variable
            return new Post(
            $document->title,
            $document->excerpt,
            $document->date,
            $document->body(),
            $document->slug
        );
        }  //end fun
        
     ,$files );
   }
   //end find fun


}
// end class
