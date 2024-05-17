<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = ['lang1' => 'html', 'lang2' => 'css', 'lang3' => 'javascript'];
    return view('home', ['data' => $data]);
});

Route::get('/welcome', function () {
    return view('welcome');
});
