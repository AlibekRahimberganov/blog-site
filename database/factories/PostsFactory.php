<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    public function definition(): array
    {
        return [
            // Post attributes
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraphs(3, true),
            'content_media' => $this->faker->imageUrl(),
            'published_at' => $this->faker->date(),
            'edited_at' => $this->faker->date(),
        ];
    }
}
