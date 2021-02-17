@extends ('App')

@section ('content')

    <div class="container mt-5 border">
        <div class="row mt-3">
            <div class="col-md">
                <img class="card-img-top" src="{{asset('img/book.jpg')}}" alt="Card image cap">
            </div>
            <div class="col-md">
                <h1>Title</h1>
                <hr>
                <div class="row">
                    <div class="col-md">
                        <div>Author: DEMO AUTHOR</div>
                        <div>Genre: DEMO GENRE</div>
                    </div>
                    <div class="col-md">
                       <span class="rating"><input type="radio" name="rating" value="5" id="5"><label
                               for="5">☆</label> <input type="radio" name="rating" value="4" id="4"><label
                               for="4">☆</label> <input
                               type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input
                               type="radio" name="rating" value="2" id="2"><label for="2">☆</label> <input
                               type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                       </span>
                    </div>
                </div>
                <div class="col-md p-5">
                    THE BOOK DESCRIPTION HERE
                </div>
                <div class="col-md">
                    <h1>Reviews</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="row p-5">
                    <div class="col-md avatar">
                        <img src="{{asset('img/avataras.png')}}" alt="Card image cap">
                        <span>Name Surname</span>
                    </div>
                    <div class="col-lg">
                        <p>Lorum ipsum dolar ipsum epa inkum bumkum, Lorum ipsum dolar ipsum epa inkum bumkum, Lorum
                            ipsum dolar ipsum epa inkum bumkum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Leave your review</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <button type="submit" class="btn btn-primary mb-2 mt-4">Send</button>
                    </div>
                </form>
        </div>
    </div>
@endsection
