<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   

 public function createAccount()
 {
      return view('register.createAccount');
 }

 public function storeNewUser()
{    
    //here we  validate data -> encrypt the password ->create new user ->redirect to home page 

        $validatedAttributes = request()->validate([
            'name'=>'required|min:3|max:255',
            'username'=>'required|min:3|max:255',
            'email'=>'required|email',
            'password'=>'required|min:8|max:255',
        
            // 'name'=>['required','min:3','max:255'],
            // 'username'=>['required','min:3','max:255'],
            // 'email'=>['required','email'],
            // 'password'=>['required','min:8','max:255'],
        
        ]);
 
        // 1way for encrypt password here   , 2way in the user file by create mutator method
        $validatedAttributes['password']= bcrypt($validatedAttributes['password']);


        // dd('sucess creat user');
        User::create($validatedAttributes);
        return redirect('/');


}





}
