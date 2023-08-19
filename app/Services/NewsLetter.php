<?php 

namespace App\Services;

// this intrface implemented in any type of newsletter providers that i want to used 
interface NewsLetter
{

  public function subscribe(String $email ,String $list =null);

}