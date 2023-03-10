<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complain>
 */
class ComplainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'complainant_name' => fake()->name(),
            'complainant_no' => fake()->unique()->safeEmail(),
            // 'email_verified_at' => now(),
        ];
    }
}
