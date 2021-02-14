@extends ('app')

@section('content')
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
@endsection


