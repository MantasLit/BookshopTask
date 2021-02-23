@extends ('app')

@section('content')
    <h1 class="store-name d-flex justify-content-center">The Book Shop</h1>
    @auth
        <h2 class="d-flex justify-content-center">Nice to see you
            - {{ucfirst(isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email)}}</h2>
        <h3 class="d-flex justify-content-center">{{date('Y-m-d')}}</h3>
    @endauth
    <div class="container">
        <div class="row d-flex">
            <div class="col">
                @foreach($books as $key => $data)
                    <div class="card mt-4  mb-4" style="width: 195px">
                        <a href="{{route('singlebook')}}">
                            <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <span class="new">NEW</span>
                            <span>discount: {{$data->discount}}%</span>
                            <h5 class="card-title">{{$data->title}}</h5>
                            <p class="card-text">Author:</p>
                            <p class="price">Price: {{$data->price}} €</p>
                        </div>
                    </div>
                @endforeach
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


