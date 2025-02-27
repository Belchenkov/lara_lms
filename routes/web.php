<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\StudentDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/** Frontend Routes */
Route::get('/', [FrontendController::class, 'index'])->name('home');

/** Student Routes */
Route::group([
    'middleware' => ['auth:web', 'verified', 'check_role:student'],
    'as' => 'student.',
    'prefix' => 'student'
], function () {
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard');
});

/** Instructor Routes */
Route::group([
    'middleware' => ['auth:web', 'verified', 'check_role:instructor'],
    'as' => 'instructor.',
    'prefix' => 'instructor'
], function () {
    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
