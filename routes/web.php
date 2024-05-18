<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/login', function () {
    if (auth()->check()) {
        return redirect()->intended();
    }

    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    if (auth()->check()) {
        return redirect()->intended();
    }

    return view('pages.register');
});

Route::post('/register', [UserController::class, 'registerUser']);

Route::post('/login', [UserController::class, 'loginUser']);

Route::get('/logout', [UserController::class, 'logoutUser']);

Route::post('/questions/{id}/setActive', [QuestionController::class, 'setActive'])->name('questions.setActive');

Route::get('/manual/download', [ManualController::class, 'downloadPdf'])->name('manual.download');


if (App::environment('local')) {
    Route::get('/token', [TokenController::class, 'getToken']);
}

Route::get('/reset_password', function () {
    return view('pages.reset-password');
});

Route::post('/reset_password', [UserController::class, 'resetPassword']);

Route::post('/updateCredentials', [UserController::class, 'updateCredentials'])->name('updateCredentials');

Route::middleware(['auth', Admin::class])->get('/admin', function () {
    return view('pages.admin');
});

Route::get('/questions', [QuestionController::class, 'show'])->middleware('auth');

Route::get('/questions', [QuestionController::class, 'show'])->middleware('auth');

Route::get('/question/create', function () {
    return view('pages.create-question');
})->middleware('auth');;

Route::delete('/questions/delete/{questionId}',
    [QuestionController::class, 'deleteQuestion'])
    ->name('questions.delete')->middleware('auth');

Route::patch('/questions/update/{questionId}',
    [QuestionController::class, 'updateQuestion'])
    ->name('questions.update')->middleware('auth');

Route::get('/question/{code}',
    [AnswerController::class, 'view'])
    ->name('question')->middleware('question.active');

Route::get('/question/{code}/result',
    [QuestionController::class, 'viewAnswers'])
    ->name('answers')->middleware('question.active');

Route::get('/questions/export',
    [QuestionController::class, 'exportQuestions'])
    ->name('questions.export');

Route::get('/manual', function () {
    return view('pages.manual');
});

Route::get('/change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('change-language');
