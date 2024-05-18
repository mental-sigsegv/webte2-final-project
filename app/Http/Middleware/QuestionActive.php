<?php

namespace App\Http\Middleware;

use App\Models\Question;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QuestionActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $question = Question::findByCode($request->code);;

        if ($question->active != 1) {
            abort(404);
        }

        return $next($request);
    }
}


