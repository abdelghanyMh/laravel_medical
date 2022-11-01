<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->name(),
            'noSSocial' => fake()->numberBetween(10, 20),
            'dob' => fake()->date('Y_m_d'),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'diseases' => fake()->sentence(),
            'allergies' => fake()->sentence(),
            'antecedents' => fake()->sentence(),
            'comments' => fake()->paragraph(),
        ];
    }
}
