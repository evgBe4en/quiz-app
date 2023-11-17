<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
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
    return view('home');
});

Route::get('/quiz', [QuestionController::class, 'index']);
Route::post('/quiz', [QuestionController::class, 'submit'])->name('quiz.submit');
Route::get('/result', [ResultController::class, 'show'])->name('result.show');
Route::get('/results', [ResultController::class, 'index'])->name('result.index');
