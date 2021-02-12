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
    <a class="navbar-brand" href="#">Book Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Sign In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-secondary text-white" href="#">Sign Up</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<h1 class="store-name">The Book Shop</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <span class="new">NEW</span>
                    <span>discount: 10%</span>
                    <h5 class="card-title">Book title:</h5>
                    <p class="card-text">Author:</p>
                    <p class="price">Price:</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Book title:</h5>
                    <p class="card-text">Author:</p>
                    <p class="price">Price:</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Book title:</h5>
                    <p class="card-text">Author:</p>
                    <p class="price">Price:</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Book title:</h5>
                    <p class="card-text">Author:</p>
                    <p class="price">Price:</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Book title:</h5>
                    <p class="card-text">Author:</p>
                    <p class="price">Price:</p>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="pagination d-flex justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

</body>
</html>


