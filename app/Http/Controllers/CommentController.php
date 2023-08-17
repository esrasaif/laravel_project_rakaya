<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function addComment(Post $post)
    {

        // validate
        request()->validate([ 'body' => 'required'  ]);

        // store
        $post->comments()->create([
              'user_id' => request()->user()->id,
              'body' => request('body')
        ]);

        // back
        return back();

    }





// end class
}
