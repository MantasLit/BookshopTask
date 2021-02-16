@extends ('app')

@section('content')
    <h1 class="store-name">Add new book</h1>
    <form>
        <div class="form-group m-5">
            <label for="title">Title *</label>
            <input type="text" class="form-control mb-4" id="title" placeholder="Title input" required>
            <label for="authors">Authors (comma separated) *</label>
            <input type="text" class="form-control mb-4" id="authors" placeholder="Authors input" required>
            <label for="genres">Genres *</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="drama">
                <label class="form-check-label" for="drama">
                    Drama
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="self-help">
                <label class="form-check-label" for="self-help">
                    Self-help
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="romance">
                <label class="form-check-label" for="romance">
                    Romance
                </label>
            </div>
            <div class="form-group mt-4">
                <label for="description">Description *</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price *</label>
                <input type="number" class="form-control" id="price" placeholder="Book price">
            </div>
            <div class="form-group">
                <label for="cover">Cover photo</label>
                <input type="file" class="form-control-file" id="cover">
            </div>
            <button type="submit" class="btn btn-dark">SAVE BOOK</button>
        </div>
    </form>
@endsection


