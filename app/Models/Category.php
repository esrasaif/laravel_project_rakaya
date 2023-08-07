<?php

namespace App\Models;


use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug'];

    public function posts()
    {
       //here we define the relationship type between any post object and the category class here it is "hasMany" because the category may have many posts
        return $this->hasMany(Post::class);


    }
    // end fun






}
