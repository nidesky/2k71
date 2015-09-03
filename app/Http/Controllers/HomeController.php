<?php

namespace Ik47\Http\Controllers;

use Ik47\Repositories\PostRepository;
use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;
use Hashids;
use Storage;

class HomeController extends Controller
{

    public function demo()
    {

        $file = fopen(public_path('assets/imgs/23.png'), 'w');
        $upyun = Storage::disk('upyun');
        $rs = $upyun->readStream('disk/demo.png');
        fwrite($file, $rs);
        fclose($file);
        die('This is a demo');
    }

    public function index(PostRepository $post)
    {
        $posts = $post->all();

        return view('home.index')->with(compact('posts'));
    }


}
