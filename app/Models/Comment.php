<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;




    public function post()
    {
    //    here we define the relationship type between any post object and the category class
        return $this->belongsTo(Post::class);

    }
    // end fun

    public function author()
    {
    //    here we define the relationship type between any post object and the category class and also confirm that the foriegn key called user_id
        return $this->belongsTo(User::class , 'user_id');


    }












}

