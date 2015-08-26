<?php

namespace Ik47\Http\Controllers;

use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin()
    {
        dd('login');
    }

    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup()
    {
        dd('signup');
    }

}
