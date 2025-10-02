<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement(['XI PPLG 1', 'XI PPLG 2', 'XI DKV 1', 'XI Anim 1', 'XI Anim 2', 'XI Anim 3', 'XI Anim 4']),
        ];
    }
}
