<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

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
    // file it is bulit in model and {files} methos used for reading the content of the folder it will return array of all the paths of files inside folder
      $files= File::files(resource_path("posts/"));
      
    //   loop over files array and mapp it to file variable 
     return array_map( fn($file)=> $file-> getContents() , $files ) ;  

   }
   //end find fun


}
// end class
