<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    //  atrributes
    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

















    // methods
    public static function find($slug)
    {
        // 1way

        // // //   check if this file path exists
        // if (!file_exists( $path = resource_path("posts/{$slug}.html"))) {
        //    throw new ModelNotFoundException() ;
        // }

        // // // fetch the file data and store it inside the cach for specifi time
        // return cache()->remember("posts.{$slug}", 1200, fn()=> file_get_contents($path) );

        // 2way
        // from all post we eill find the one that matchs the requested
        $posts = static::all();
        // from all posts we want the first one that match the sslug inside the page that requested
        return $posts->firstWhere('slug', $slug);
    }
    //end find fun


    // check if the request found
    public static function  foundOrFailed($slug)
    {
        $posts = static::find($slug);
        if(!$posts){

        }
        return $posts;

    }


    // this function to fetch all files of posts 
    public static function all()
    {

        // using collect function from collections
        return cache()->rememberForever("patients.all", function () {

         return   collect(File::files(resource_path("posts/")))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(
                    fn ($document) =>

                    new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
                    )

                )
                ->sortByDesc('date');
        });
        //  end cach method
    }
    //    end method

}
// end class
