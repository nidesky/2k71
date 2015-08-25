<?php

namespace Ik47\Http\Controllers;

use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;
use Hashids;

class HomeController extends Controller
{
    public function getIndex()
    {dd(Hashids::decode("plxQgoExPGOEX"));
        return Hashids::encode(999999999978999999);
    }
}
