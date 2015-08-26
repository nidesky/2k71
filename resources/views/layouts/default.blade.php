<html>
<head>
    <meta charset="UTF-8">
    <title>2k71</title>

    <link rel="stylesheet" href="/assets/vendor/normalize.css/normalize.css"/>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/vendor/fontawesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/css/main.css"/>
    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">2K71</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('posts') }}">Posts</a></li>
                <li><a href="{{ url('gists') }}">Gists</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('login') }}">Log in</a></li>
                <li><a href="{{ url('signup') }}">Sign up</a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('main')

</body>
</html>