<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliotheque</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        @foreach ($books as $book)
        <div class="col-sm-12 col-md-4 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-3">
                <img src="{{ asset('/' . $book->image) }}" alt="Image du livre {{ $book->name }}" class="card-img-top" style="width: 300px; height: 300px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $book->name }}</h5>
                    <p class="card-text">{{ $book->author->name }}</p>
                    <form action="{{ route('borrower.student') }}" method="POST">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <button type="submit" class="btn btn-danger">Emprunter</button>
                    </form>
                   <!-- <a href="{{ route('borrower.store', $book->id) }}" class="btn btn-danger">Emprunter</a>-->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
