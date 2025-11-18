<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $aboutOne = 'About One';
    $aboutTwo = 'About Two';
    return view("about.index", [
        'aboutOne' => $aboutOne,
        'aboutTwo' => $aboutTwo
    ]); // compact('aboutOne', 'aboutTwo')
})->name('about.page');

Route::get('/contact', function () {
    $textContents = [
        [
            'content' => 'Content One',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Two',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Three',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Four',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Five',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Six',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'pending'
        ]
    ];
    // return '<h1>Contact Page</h1>';
    return view('contact.index', ['textContent' => $textContents]);
})->name('contact.page');

Route::get('/news/{id}', function ($id) {
    return "<h1>New = {$id}</h1>";
})->name('news.page');

Route::get('/product/{id}', function ($id) {
    return '<h1>Product = ' . $id . '</h1>';
});

Route::get('/home', function () {
    $blogs = [
        [
            'title' => 'Title One',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Title Two',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Title Three',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Title Four',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ],
        [
            'title' => 'Title Five',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.'
        ]
    ];
    // return "<h2><a href='/about'>About</a></h2>";
    return view('home.index', ['blogs' => $blogs]);
})->name('home.page');

Route::get('/content', function () {
    return "<h2><a href='" . route('about.page') . "'>About</a></h2>";
});

Route::get('/course', function () {
    return "<h2><a href='" . route('news.page', ['id' => 2]) . "'>News</a></h2>";
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return '<h2>User List</h2>';
    });

    Route::get('/create', function () {
        return '<h2>User Create</h2>';
    });

    Route::get('/show', function () {
        return '<h2>User Show</h2>';
    });
});

/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Move a resource
 * ///////////////////////////
 * Example - Route::post
 */

Route::fallback(function () {
    return '<h1>404 - Page Not Found</h1>';
});

/**
 * MVC
 * ----------
 * M - Model (Data)
 * V - View (UI)
 * C - Controller (Logic)
 */
