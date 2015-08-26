@extends('layouts.default')

@section('main')

    <div class="container login">
        <div class="login-block">
            <div class="login-signup">
                <div class="login-form">
                    <form method="POST" id="login-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" />
                            <span class="help-block error-input">asdfasdfasdfasdf</span>
                        </div>

                        <div class="form-group">
                            <span class="pull-right forgetpwd"><a href="">I've forgotten my password</a></span>
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-lg btn-info login-btn">Log in</button>
                    </form>
                </div>

                <div class="login-social">
                    <p clas="control-label">or Sign in With:</p>

                    <div class="social-list">
                        <a href="#1" class="btn btn-default btn-wx-signin">
                            <i class="fa fa-weixin"></i>
                            <span>Weixin</span>
                        </a>
                        <a href="#1" class="btn btn-default btn-wb-signin">
                            <i class="fa fa-weibo"></i>
                            <span>Weibo</span>
                        </a>
                        <a href="#1" class="btn btn-default btn-qq-signin">
                            <i class="fa fa-qq"></i>
                            <span>QQ</span>
                        </a>
                        <a href="#1" class="btn btn-default btn-git-signin">
                            <i class="fa fa-github"></i>
                            <span>Github</span>
                        </a>
                        <a href="#1" class="btn btn-default btn-gl-signin">
                            <i class="fa fa-google-plus"></i>
                            <span>Google</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="text-center">
                Don't have a profile? <a href="/signup.html">Sign up for FREE</a>
            </div>
        </div>
    </div>

@stop