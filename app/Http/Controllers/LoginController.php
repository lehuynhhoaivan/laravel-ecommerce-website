<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    function index() {
        return View('login.index');
    }

    function handleLogin(LoginRequest $request) {
        // echo $_POST['username'];
        // echo '<br>';
        // echo $_POST['email'];
        // echo '<br>';
        // echo $_POST['password'];

        // dd($request);

        // dd($request->all());

        // return $request;

        $request->validated();
        return $request;
    }
}
