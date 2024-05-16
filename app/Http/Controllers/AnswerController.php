<?php

namespace App\Http\Controllers;

use App\Models\Question;

class AnswerController extends Controller
{
    public function view($code)
    {
        return view('pages.question', [
            'question' => Question::findByCode($code)
        ]);
    }
}
