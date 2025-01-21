<?php

use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\UserDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/** Student Routes */
Route::group([
    'middleware' => ['auth:web', 'verified', 'check_role:student'],
    'as' => 'student.',
    'prefix' => 'student'
], function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
});

/** Instructor Routes */
Route::group([
    'middleware' => ['auth:web', 'verified', 'check_role:instructor'],
    'as' => 'instructor.',
    'prefix' => 'instructor'
], function () {
    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
