<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

           Paginator::useTailwind();   //this is the default 

           Gate::define('admin',function(User $user )
           { return $user->username =='esrasaif' ; });

           Blade::if('admin',function( )
           { return request()->user()?->can('admin') ; });
           
    }
}
