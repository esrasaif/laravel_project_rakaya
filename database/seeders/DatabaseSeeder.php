<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            // prevent error appear if we insert duplicate data
         User::truncate();
         Category::truncate();
         Post::truncate();

 

       $user= \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


       $cat1= Category::create([
            'name'=>'family',
            'slug'=>'family'
        ]);

       $cat2= Category::create([
            'name'=>'funy',
            'slug'=>'funy'
        ]);


        Post::create([
            'user_id'=> 1,
            'category_id'=>1,
            'title'=>'laugh wyih me',
            'slug'=>'funy post',
            'body'=>'hello',
            'excerpt'=>'excerpt post'
       
        ]);




    }
    // end fun
}
