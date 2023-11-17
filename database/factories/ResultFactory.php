<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $total = 10;
        $correct = fake()->numberBetween(0, 10);
        $incorrect = $total - $correct;

        return [
            'user_id' => rand(1, 10),
            'total' => $total,
            'correct' => $correct,
            'incorrect' => $incorrect,
        ];
    }
}
