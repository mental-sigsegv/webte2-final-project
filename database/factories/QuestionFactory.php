<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->regexify('[A-Za-z0-9]{5}'),
            'user_id' => User::all()->random()->id,
            'subject_id' => Subject::all()->random()->id,
            'question' => fake()->sentence(4),
        ];
    }
}
