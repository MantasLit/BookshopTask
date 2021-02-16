@extends ('app')

@section('content')
    <div class="container-fluid">
        <div class="row d-flex">
            @for ($i =1; $i <= 25; $i++)
                <div class="col">
                    <div class="card mt-4  mb-4" style="width: 200px">
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
            @endfor
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


