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
                        </div>

                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="repassword">Password confirmation</label>
                            <input type="text" name="repassword" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-lg btn-info login-btn">Sign up</button>
                    </form>
                </div>

                <div class="login-social">
                    @include('auth/social-list')
                </div>
            </div>

            <div class="text-center">
                Have a profile? <a href="/signup.html">Log in</a>
            </div>
        </div>
    </div>
@stop