<?php 

 namespace App\Services;

use MailchimpMarketing\ApiClient;

 class NewsLetter
 {

   public function subscribe(String $email ,String $list =null)
    {
         $list ??=config('services.mailchimp.lists.subscribers');

        return $this->client()->lists->addListMember( $list, [
            "email_address" => $email  ,
            "status" => "subscribed",
        ]);
        // dd($response);



    }


    protected function client()
    {

        $mailchimp = new ApiClient();
       
        return  $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us17'
            
        ]);




    }





// end class
 }