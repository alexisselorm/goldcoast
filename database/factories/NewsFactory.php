<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'slug' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'category_id' => $this->faker->numberBetween(1, 5),
            'body' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->image(),
        ];
    }
}
