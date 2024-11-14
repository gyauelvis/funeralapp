<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contributor>
 */
class ContributorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'membership_id' => fake()->unique()->creditCardNumber(),
            'phone_number' => fake()->phoneNumber(),
            'is_member' => fake()->boolean(50),
            'suburb' => fake()->city(),
            'denomination' => fake()->words(2),
            'picture_path' => null,
        ];
    }
}
