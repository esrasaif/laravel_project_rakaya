<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {  
        $faker = \Faker\Factory::create(); // Instantiate the Faker generator

        return [
            'post_id' =>Post::factory(),
            'user_id' =>User::factory(),
            'body' => $faker->paragraph()
        ];
    }
}
