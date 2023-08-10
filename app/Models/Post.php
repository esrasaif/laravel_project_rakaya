<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // attributes
   
// here we determaine which attributes that allowed to be mass assignment  any thing else is ignored
    protected $fillable = ['title','excerpt','body'];
    // protected $guarded=['id'];
     
    // this will make the query on this tables in same time we load the categories  , this method will solved n+1 problem , here we add it insted of add "load" method on objects that we want to load another object when it excute  in route file 
    protected $with = ['category','author'];





    //methods

//    query value sent automatically but the values of filter determind in the controler
     public function scopeFilter($query ,array $filters)
      {
        // search filter
        $query->when( $filters['search'] ?? false , function($query,$search) 
        {
            $query
            ->where( 'title','like','%'.$search.'%' )
            ->orWhere( 'body','like','%'.$search.'%' );
        });
       

        // display all categories with its all posts
    //    here it works ike this -> give me the posts which have this category and match its slug if it the same slug of category that the user selected then okay displa yoll relative posts ,give me all of 
        $query->when( $filters['category'] ?? false , function($query, $category) 
        {
            $query ->whereHas('category', fn($query) =>
                  $query ->where( 'slug', $category) );
        });
       

        $query->when( $filters['author'] ?? false , function($query, $author) 
        {
            $query ->whereHas('author', fn($query) =>
                  $query ->where( 'username', $author) );
        });
       


    }
    // end fun








    public function category()
    {
    //    here we define the relationship type between any post object and the category class
        return $this->belongsTo(Category::class);


    }
    // end fun

    public function author()
    {
    //    here we define the relationship type between any post object and the category class and also confirm that the foriegn key called user_id
        return $this->belongsTo(User::class , 'user_id');


    }
    // end fun







}
// end class
