<?php

namespace App\Models;

use App\Models\Category;
use App\Models\User;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   
// here we determaine which attributes that allowed to be mass assignment  any thing else is ignored
    protected $fillable = ['title','excerpt','body'];
    // protected $guarded=['id'];

    public function category()
    {
    //    here we define the relationship type between any post object and the category class
        return $this->belongsTo(Category::class);


    }
    // end fun

    public function user()
    {
    //    here we define the relationship type between any post object and the category class
        return $this->belongsTo(User::class);


    }
    // end fun







}
// end class
