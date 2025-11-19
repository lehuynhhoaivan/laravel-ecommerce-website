<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
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
        return view('home.index', ['blogs' => $blogs]);
    }
}
