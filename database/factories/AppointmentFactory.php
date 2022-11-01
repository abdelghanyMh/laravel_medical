<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'date' => fake()->date('Y_m_d'),
            'motivation' => fake()->paragraph(),
            'patient_id' => fake()->numberBetween(1, 5),
            'user_id' => fake()->numberBetween(1, 2),
            'start_time'=>fake()->time(),
            'end_time'=>fake()->time(),
        ];
    }
}