<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => fake()->number_format('float', 2, '.', ','),
            'payment_type' => 'CONTRIBUTION',
            'purpose' => fake()->sentence(),
            'month' => fake()->month(),
            'year' => fake()->year(),
            'slogan' => fake()->sentence(),
            'contributor_id' => fake()->numberBetween(0, 20),
        ];
    }
}
