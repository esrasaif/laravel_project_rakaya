<?php 

 namespace App\Services;

use MailchimpMarketing\ApiClient;

 class MailChimpNewsLetter implements NewsLetter
 {

    public function __construct(protected ApiClient $client)
    {
        
    }


   public function subscribe(String $email ,String $list =null)
    {
         $list ??=config('services.mailchimp.lists.subscribers');

        return $this->client->lists->addListMember( $list, [
            "email_address" => $email  ,
            "status" => "subscribed",
        ]);
        // dd($response);



    }





// end class
 }