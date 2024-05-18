<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class QuestionController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $userId = $user->id;

        if ($user->isAdmin()) {
            $whereClause = '1=1';
        } else {
            $whereClause = "questions.user_id = $userId";
        }

        return view('pages.questions', [
            'questions' => $this->getAllDataAboutQuestions($whereClause)
        ]);
    }

    public function deleteQuestion($questionId){

        $user = Auth::user();
        $userId = $user->id;

        if ($user->isAdmin()) {
            $whereClause = '1=1';
        } else {
            $whereClause = "questions.user_id = $userId";
        }

        $question = Question::where('id', $questionId)
            ->whereRaw($whereClause)
            ->first();

        if ($question) {
            $question->delete();
            return redirect()->back()->with('success', 'Question deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Question not found or you do not have permission to delete it.');
        }
    }

    public function updateQuestion(Request $request, $questionId)
    {
        $user = Auth::user();
        $userId = $user->id;

        $question = Question::find($questionId);

        if ($question) {
            if ($user->isAdmin() || $question->user_id === $userId) {
                $question->active = $request->input('active');
                $question->save();

                return redirect()->back()->with('success', 'Question updated successfully.');
            } else {
                return redirect()->back()->with('error', 'You do not have permission to update this question.');
            }
        } else {
            return redirect()->back()->with('error', 'Question not found.');
        }
    }

    private function getAllDataAboutQuestions($whereClause)
    {
        return Question::with('user', 'subject')
            ->whereRaw($whereClause)
            ->get();
    }

    public function setActive($questionId)
    {
        $question = Question::findOrFail($questionId);
        $question->active = !$question->active;
        $question->save();

        return back()->with('success', 'Question status updated successfully.');
    }

    public function viewAnswers($code)
    {
        $question = Question::with('answers.option')->where('code', $code)->firstOrFail();

        $optionsData = $question->answers
            ->groupBy('option.option')
            ->map(function ($group) {
                return [
                    'count' => $group->count(),
                    //'correct' => $group->first()->option->correct,
                    'correct' => $firstOption->correct ?? 0,
                ];
            });

        $labels = $optionsData->keys()->all();
        $data = $optionsData->pluck('count')->all();
        $backgroundColors = $optionsData->map(function ($item) {
            return $item['correct'] ? '#4CAF50' : '#F44336';
        })->values()->all();

        return view('pages.answers', compact('question', 'labels', 'data', 'backgroundColors'));
    }


    public function exportQuestions()
    {
        // Retrieve all questions with their options and answers
        $questions = Question::with(['options', 'answers.option'])->get();

        // Convert questions to JSON
        $json = $questions->map(function($question) {
            return [
                'question' => $question->question,
                'code' => $question->code,
                'created_at' => $question->created_at,
                'updated_at' => $question->updated_at,
                'active' => $question->active,
                'open' => $question->open,
                'subject' => $question->subject->name ?? null,
                'options' => $question->options->map(function($option) {
                    return [
                        'option' => $option->option,
                        'correct' => $option->correct,
                    ];
                }),
                'answers' => $question->answers->map(function($answer) use ($question) {
                    return [
                        'answer' => $question->open == 1 ? $answer->answer : $answer->option->option,
                        'correct' => $question->open == 1 ? null : $answer->option->correct,
                        'created_at' => $answer->created_at,
                    ];
                }),
            ];
        })->toJson();

        // Define the file name and path
        $fileName = 'questions_' . now()->format('Y-m-d_H-i-s') . '.json';
        $filePath = storage_path('app/' . $fileName);

        // Save JSON to a file
        file_put_contents($filePath, $json);

        // Return the JSON file as a response
        return Response::download($filePath)->deleteFileAfterSend(true);
    }

}
