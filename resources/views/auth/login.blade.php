@extends('layouts.default')

@section('main')

    <div class="container login">
        <div class="login-block">
            <div class="login-signup">
                <div class="login-form">
                    <form method="POST" id="login-form">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control" v-model="email" />
                            <span class="help-block error-input">@{{ email }}</span>
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
                    @include('auth/social-list')
                </div>
            </div>

            <div class="text-center">
                Don't have a profile? <a href="/signup.html">Sign up for FREE</a>
            </div>
        </div>
    </div>

    <script src="/js/app.js"></script>

@stop