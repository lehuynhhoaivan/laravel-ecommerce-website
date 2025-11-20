<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $aboutOne = 'About One';
        $aboutTwo = 'About Two';
        return view("about.index", [
            'aboutOne' => $aboutOne,
            'aboutTwo' => $aboutTwo
        ]); // compact('aboutOne', 'aboutTwo')
    }
}
