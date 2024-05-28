<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $data = ['lang1' => 'html', 'lang2' => 'css', 'lang3' => 'javascript'];
//     return view('home', ['data' => $data]);
// });

// Route::get('/welcome', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     $data = 'welcome page!';
//     $languages = ['lang1' => 'html', 'lang2' => 'css', 'lang3' => 'javascript'];
//     return view('welcome', ['myData' => $data, 'languages' => $languages]);
// });


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::resource('/student', StudentController::class);
Route::resource('/teacher', TeacherController::class);

Route::get('/teachers/trash', [HomeController::class, 'trash'])->name('teacher.trash');

Route::get('/teachers/{id}');
