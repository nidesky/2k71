<?php

namespace Ik47\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        dd($request->all());
    }
}
