<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;

            $userRole = DB::table('users')->where('id', $userId)->value('role');

            if ($userRole === 'Admin') {
                $whereClause = '1=1';
            } else {
                $whereClause = "questions.user_id = $userId";
            }

            return view('pages.questions', [
                'questionsData' => $this->getAllDataAboutQuestions($whereClause)
            ]);
        } else {
            return redirect()->route('login');
        }
    }

    public function deleteQuestion($questionId){
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;
            $userRole = DB::table('users')->where('id', $userId)->value('role');

            if ($userRole == 'Admin') {
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
        } else {
            // If the user is not logged in, redirect them
            return redirect()->route('login');
        }
    }

    public function updateQuestion(Request $request, $questionId)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $userId = $user->id;

            $userRole = DB::table('users')->where('id', $userId)->value('role');

            if ($userRole === 'Admin') {
                // If the user is an admin, update the question directly
                $question = Question::find($questionId);

                if ($question) {
                    // Update the question with the request data
                    $question->update($request->all());
                    return redirect()->back()->with('success', 'Question updated successfully.');
                } else {
                    return redirect()->back()->with('error', 'Question not found.');
                }
            } else {
                // If the user is not an admin, return an error
                return redirect()->back()->with('error', 'You do not have permission to update questions.');
            }
        } else {
            // If the user is not logged in, redirect them
            return redirect()->route('login');
        }
    }

    private function getAllDataAboutQuestions($whereClause)
    {
        $data =
            DB::table('questions')
                ->join('subjects', 'subjects.id', '=', 'questions.subject_id')
                ->join('users', 'users.id', '=', 'questions.user_id')
                ->select(
                    'questions.id',
                    'users.name',
                    'questions.code',
                    'questions.question',
                    'questions.active',
                    'questions.open',
                    'questions.created_at',
                    'questions.updated_at',
                    'subjects.name as subjectName')
                ->whereRaw($whereClause)
                ->get();

        return $data;
    }
}
