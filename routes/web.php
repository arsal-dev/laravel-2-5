<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/student', StudentController::class);
    Route::resource('/teacher', TeacherController::class);

    Route::get('/teachers/trash', [HomeController::class, 'trash'])->name('teachers.trash');

    Route::get('/teachers/{id}', [HomeController::class, 'restore'])->name('teachers.restore');

    Route::delete('/teachers/{id}', [HomeController::class, 'delete'])->name('teachers.delete');
});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

require __DIR__ . '/auth.php';
