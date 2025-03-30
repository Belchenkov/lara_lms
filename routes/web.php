<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\InstructorDashboardController;
use App\Http\Controllers\Frontend\ProfileController;
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
    Route::get('/become-instructor', [StudentDashboardController::class, 'becomeInstructor'])->name('become-instructor');
    Route::post('/become-instructor/{user}', [StudentDashboardController::class, 'becomeInstructorUpdate'])->name('become-instructor.update');

    Route::get('/profile', [ProfileController::class, 'indexStudent'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
    Route::post('/profile/update-social', [ProfileController::class, 'updateSocial'])->name('profile.update-social');
});

/** Instructor Routes */
Route::group([
    'middleware' => ['auth:web', 'verified', 'check_role:instructor'],
    'as' => 'instructor.',
    'prefix' => 'instructor'
], function () {
    Route::get('/dashboard', [InstructorDashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'indexInstructor'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.update-password');
    Route::post('/profile/update-social', [ProfileController::class, 'updateSocial'])->name('profile.update-social');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
