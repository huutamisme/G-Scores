<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

Route::get('', [PagesController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);

Route::get('/student/checkScore', [StudentController::class, 'checkScore']);

Route::get('/student/leaderboard', [StudentController::class, 'leaderboard']);

Route::get('/student/report', [StudentController::class, 'report']);


