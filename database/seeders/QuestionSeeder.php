<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\QuestionActiveInterval;
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
        $sbj = Subject::create([
            'name' => 'LA2',
        ]);

        $question = Question::factory()->create([
            'user_id' => User::first()->id,
            'subject_id' => $sbj->id,
            'open' => false,
            'question' => "Spravím LA2 na RT?",
        ]);

        Option::create([
            'question_code' => $question->code,
            'correct' => 1,
            'option' => "Ano"
        ]);

        Option::create([
            'question_code' => $question->code,
            'correct' => 1,
            'option' => "Mozno"
        ]);

        Option::create([
            'question_code' => $question->code,
            'correct' => 0,
            'option' => "Nie"
        ]);


        QuestionActiveInterval::create([
            'question_code' => $question->code,
            'active_from' => $question->created_at
        ]);

        $sbj = Subject::create([
            'name' => 'WEBTE2',
        ]);

        $question = Question::factory()->create([
            'user_id' => User::first()->id,
            'subject_id' => $sbj->id,
            'open' => true,
            'question' => "Kto je najlepší učiteľ predmetu WEBTE2?"
        ]);

        QuestionActiveInterval::create([
            'question_code' => $question->code,
            'active_from' => $question->created_at
        ]);
    }
}
