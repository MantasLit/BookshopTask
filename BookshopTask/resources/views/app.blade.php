<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Book Shop</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.3.1.js" defer></script>
    <script src="{{asset('js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Book Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @guest
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('login')}}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-secondary text-white" href="{{route('register')}}">Sign Up</a>
                </li>
            @endguest
            @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('addnewbook')}}">Add new book</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        More Option
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('accountinfo')}}">Change account info</a>
                        <a class="nav-link btn btn-secondary text-white" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Log out</a>
                        <form action="{{route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </div>
                </li>
            @endauth
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

@yield('content')

</body>
</html>
