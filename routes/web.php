<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

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

Route::get('/qrcode', function () {
    return view('pages.qrcode');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::post('/register', [UserController::class, 'registerUser']);

Route::post('/login', [UserController::class, 'loginUser']);

if (App::environment('local')) {
    Route::get('/token', [\App\Http\Controllers\TokenController::class, 'getToken']);
}


Route::get('/reset_password', function () {
    return view('pages.coming-soon');
});


Route::get('/admin', function () {
    return view('pages.coming-soon');
})->middleware(Admin::class);

Route::get('/questions', function () {
    return view('pages.coming-soon');
});

Route::get('/question/create', function () {
    return view('pages.coming-soon');
});

Route::get('/question/{code}', function () {
    return view('pages.coming-soon');
});

Route::get('/question/{code}/result', function () {
    return view('pages.coming-soon');
});

Route::get('/manual', function () {
    return view('pages.coming-soon');
});
