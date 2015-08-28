@if (Session::has('user'))
    <li><a href="">{{ Session::get('user')->username }}</a></li>
    <li><a href="{{ url('signout') }}">Sign out</a></li>
@else
    <li><a href="{{ url('login') }}">Log in</a></li>
    <li><a href="{{ url('signup') }}">Sign up</a></li>
@endif