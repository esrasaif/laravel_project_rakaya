<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        $faker = \Faker\Factory::create(); // Create a new Faker instance

        return [
            // 'category_id' => Category::factory(),
            // 'user_id' => User::factory(),
            // 'slug' => $this->$faker->slug(),
            // 'title' =>$this->$faker->sentence(),
            // 'body' =>$faker->sentence,
            // 'excerpt' =>$faker->paragraph(2)

            'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'slug' =>$faker->sentence,
            'title' =>$faker->sentence,
            'body' =>$faker->sentence,
            'excerpt' =>$faker->paragraph(2)
        ];
    }


}
