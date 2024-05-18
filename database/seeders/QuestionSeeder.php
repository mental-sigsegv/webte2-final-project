<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Subject;
use App\Models\Option;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subject::factory(10)->create();

        $questions = Question::factory(5)->create([
            'active' => true,
            'open' => false
        ]);

        foreach ($questions as $question) {
            Option::factory(5)->create([
                'question_code' => $question->code,
            ]);
        }

        Question::factory(5)->create([
            'active' => true,
            'open' => true
        ]);
    }
}
