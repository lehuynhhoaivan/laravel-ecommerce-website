<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>About Page</h1>';
});

Route::get('/contact', function () {
    return '<h1>Contact Page</h1>';
});
