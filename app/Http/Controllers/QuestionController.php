<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function createQuestion(Request $request)
    {
        dd($request);
        $subject = Subject::create([
            'name' => $request->subject,
        ]);

        Question::create([
            'code' => fake()->unique()->regexify('[A-Za-z0-9]{5}'),
            'user_id' => auth()->id(),
            'subject_id' => $subject->id,
            'question' => $request->question,
            'open' => $request->question_type,
        ]);


        return redirect('/');
    }


}
