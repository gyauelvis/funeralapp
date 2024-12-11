<?php

namespace Database\Factories;

use App\Models\Contributor;
use App\Models\Project;
use App\Models\User;
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
            'amount' => fake()->numberBetween(1, 700),
            'payment_type' => 'CONTRIBUTION',
            'purpose' => fake()->sentence(),
            'month' => fake()->month(),
            'year' => fake()->year(),
            'contributor_id' => fake()->numberBetween(1, 700),
            'user_id' => 1,
            'project_id' => fake()->numberBetween(1, 3)
        ];
    }
}
