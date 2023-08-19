<?php

namespace App\Providers;

use App\Models\User;
use App\Services\MailChimpNewsLetter;
use App\Services\NewsLetter;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        app()->bind(NewsLetter::class , function(){

            $client=  (new ApiClient())->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us17'
                
            ]);
    
            return new MailChimpNewsLetter($client);


        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
           Model::unguard();

           Paginator::useTailwind();   //this is the default 

           Gate::define('admin',function(User $user )
           { return $user->username =='esrasaif' ; });

           Blade::if('admin',function( )
           { return request()->user()?->can('admin') ; });
           
    }
}
