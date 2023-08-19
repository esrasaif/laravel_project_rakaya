<?php

namespace App\Http\Controllers;

use App\Services\MailChimpNewsLetter;
use Illuminate\Http\Request;
use App\Services\NewsLetter;
use Exception;

class NewsLetterController extends Controller
{
    
    public function __invoke(NewsLetter $newsletter){
        
    request()->validate(['email' => 'required|email']);
  
    try 
    {
       
        $newsletter->subscribe( request('email'));
    } 
    catch (Exception $e) 
    {
        // Handle the exception, e.g., log or display an error message.
        dd($e->getMessage());
    }
    
    return redirect('/')
    ->with('success','you are now subscribed with our newsletter !!');
    



    }
}
