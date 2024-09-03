<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Training>
 */
class TrainingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->name(),
            'description' => $this->faker->paragraph,
            'user_id' =>  fake()->randomElement([2, 3, 4, 5]),
            'imageName' => '1706245562.jpg',
            'price' => fake()->randomElement([100, 200, 300, 400]),
            'status' => fake()->randomElement(['active', 'inactive']),
            'exam_status' => 'inactive',
        ];
    }
}
