<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroySession()
    {
          auth()->logout();

          return redirect('/')->with("success","Good Bye");
    }
    // end fun
}
// end class
