<?php

namespace Ik47\Http\Controllers;

use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getIndex()
    {
        return 'This is My Blog!';
    }
}
