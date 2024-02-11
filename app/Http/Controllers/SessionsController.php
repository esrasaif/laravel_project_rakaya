<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function destroySession()
    {
          auth()->logout();

          return redirect('/')->with("success","Good Bye");
    }
    // end fun



    public function createSession()
    {
        return view('logIn.createSession');
    }
    // end fun

    //  here authenticate user and log in 
    public function  storeSession()
     {
           
        // validate data
        $validatedAttributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required',
       
        ]);

        $remember =request()->input('remember');

        // check log in attempts with the user daat
        if(auth()->attempt($validatedAttributes , $remember))
         { 

            session()->regenerate();  //this command for avoid session fixation
            return redirect('/')->with("success","Welcome back ".auth()->user()->username );
         }

        //  if the auth is failed this will excute

        // 1way to handle that 
        //  return back()
        //  ->withInput()
        //  ->withErrors(['email'=>'your email is not correct']);
        
         // 2 way by thorw an exception
        throw ValidationException::withMessages(['email'=>'your email is not found , Please try again']);



     }
    //  end store-session method









}
// end class
