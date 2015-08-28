<?php

namespace Ik47\Http\Controllers;

use Hashids;
use Ik47\Repositories\UserRepository;
use Illuminate\Http\Request;

use Ik47\Http\Requests;
use Ik47\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{

    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * 登录页面
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {
        return view('auth.login');
    }


    public function postLogin()
    {
        dd('login');
    }

    /**
     * 注册页面
     *
     * @return \Illuminate\View\View
     */
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup()
    {
        dd('signup');
    }

    /**
     * 登出操作
     *
     * @return Redirect
     */
    public function getSignout()
    {
        session()->flush();

        return redirect('login');
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
        return $this->socialReturn('weibo');
    }

    /**
     * qq 登陆
     *
     * @return mixed
     */
    public function getQq()
    {
        return Socialite::with('qq')->redirect();
    }

    /**
     * qq 回调地址
     *
     * @return Redirect
     */
    public function getQqCallback()
    {
        return $this->socialReturn('qq');
    }

    /**
     * github 登录
     *
     * @return mixed
     */
    public function getGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * github 回调地址
     *
     * @return Redirect
     */
    public function getGithubCallback()
    {
        return $this->socialReturn('github');
    }

    /**
     * google 登录
     *
     * @return mixed
     */
    public function getGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * google登录回调页面
     *
     * @return Redirect
     */
    public function getGoogleCallback()
    {
        return $this->socialReturn('google');
    }

    /**
     * 第三方登录返回
     *
     * @param $social_type
     * @return Redirect
     */
    protected function socialReturn($social_type)
    {
        if ($this->callbackHandler($social_type)) {
            return redirect('/');
        }

        return redirect()->back();
    }

    /**
     * 登录处理回调
     *
     * @param $social_type
     * @return bool
     */
    protected function callbackHandler($social_type)
    {
        $oauthUser = Socialite::with($social_type)->user();

        if ($user = $this->user->checkExists([$social_type.'_id' => $oauthUser->getId()])) {

            session()->put('user', $user);

            return true;
        }

        switch ($social_type) {
            case 'google' :
                $info = [
                    'email'    => $oauthUser->getEmail(),
                    'google_id' => $oauthUser->getId()
                ];
                break;
            case 'github':
                $info = [
                    'email'    => $oauthUser->getEmail(),
                    'github_id' => $oauthUser->getId()
                ];
                break;
            case 'weibo':
                $info = [
                    'weibo_id' => $oauthUser->getId()
                ];
                break;
            case 'weixin':
                return false;
                break;
            case 'qq':
            default:
                $info = [
                    'qq_id' => $oauthUser->getId()
                ];
                break;
        }

        $info += [
            'username' => $social_type . '_' . dec62(time().mt_rand(11111, 99999)),
            'password' => bcrypt(time().mt_rand(11111, 99999)),
            'avatar'   => $oauthUser->getAvatar() ?: '',
        ];

        $user = $this->user->create($info);

        session()->put('user', $user);

        return true;
    }

}
