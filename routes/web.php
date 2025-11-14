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


Route::get('/news/{id}', function ($id) {
    return "<h1>New = {$id}</h1>";
});

Route::get('/product/{id}', function ($id) {
    return '<h1>Product = '.$id.'</h1>';
});