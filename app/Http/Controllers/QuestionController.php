<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $question = Question::findByCode($code)::with('answers.option')->firstOrFail();
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

}
