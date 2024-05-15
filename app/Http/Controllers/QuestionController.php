<?php

namespace App\Http\Controllers;

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

    private function getAllDataAboutQuestions($whereClause)
    {
        $data =
            DB::table('questions')
                ->join('subjects', 'subjects.id', '=', 'questions.subject_id')
                ->join('users', 'users.id', '=', 'questions.user_id')
                ->select(
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
