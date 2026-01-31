<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'execution_date' => $this->faker->dateTimeBetween('now', '+1 year'),
        ];
    }
}
