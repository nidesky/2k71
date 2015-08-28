<?php

namespace Ik47\Http\Controllers;

use Ik47\Repositories\PostRepository;
use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;
use Hashids;

class HomeController extends Controller
{

    public function demo()
    {
        die('This is a demo');
    }

    public function index(PostRepository $post)
    {
        $posts = $post->all();

        return view('home.index')->with(compact('posts'));
    }


}
