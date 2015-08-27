<?php

namespace Ik47\Http\Controllers;

use Ik47\Repositories\UserRepository;
use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Session;

class AuthController extends Controller
{

    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }


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

    /**
     * 微博登陆
     *
     * @return mixed
     */
    public function getWeibo()
    {
        return Socialite::with('weibo')->redirect();
    }

    /**
     * 微博登陆回调
     *
     * @return Redirect
     */
    public function getWeiboCallback()
    {
        $oauthUser = Socialite::with('weibo')->user();

        if ($user = $this->user->checkExists(['weibo_id' => $oauthUser->getId()])) {

            Session::put('user', $user);

            return redirect('/');
        }

        $user = $this->user->create([
            'username' => $oauthUser->getNickname(),
            'password' => bcrypt('123456'),
            'avatar'   => $oauthUser->getAvatar() ?: '',
            'weibo_id' => $oauthUser->getId()
        ]);

        Session::put('user', $user);

        return redirect('/');
    }

    /**
     * qq登陆
     *
     * @return mixed
     */
    public function getQq()
    {
        return Socialite::with('qq')->redirect();
    }

    public function getQqCallback()
    {
        $oauthUser = Socialite::with('qq')->user();

        if ($user = $this->user->checkExists(['qq_id' => $oauthUser->getId()])) {

            Session::put('user', $user);

            return redirect('/');
        }

        $user = $this->user->create([
            'username' => $oauthUser->getNickname(),
            'password' => bcrypt('123456'),
            'avatar'   => $oauthUser->getAvatar() ?: '',
            'qq_id' => $oauthUser->getId()
        ]);

        Session::put('user', $user);

        return redirect('/');
    }

}
