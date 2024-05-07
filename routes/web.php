<?php

use App\Http\Controllers\UserController;
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
    return view();
});

Route::get('/reqister', function () {
    return view();
});

Route::get('/reset_password', function () {
    return view();
});


Route::get('/admin', function () {
    return view();
});

Route::get('/questions', function () {
    return view();
});

Route::get('/question/create', function () {
    return view();
});

Route::get('/question/{code}', function () {
    return view();
});

Route::get('/question/{code}/result', function () {
    return view();
});

Route::get('/manual', function () {
    return view();
});
