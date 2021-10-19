@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid p-3">
        <h1>All Books</h1>

        <a href="{{ url('/books/create') }}">Add Books</a>

        @foreach ($books as $book)
            <hr>
            <h3>
                <a href="{{ url("/books/show/$book->id") }}">
                    {{ $book->id }} - {{ $book->name }}
                </a>
            </h3>
            <br>
            <img src="{{ asset("uploads/$book->img") }}" alt="" srcset="" height="70px">
            <br>
            <p>{{ $book->desc }}</p>
            <p>Price: {{ $book->price }}</p>
        @endforeach

        <a class="btn btn-secondary " href="{{ url("/books/edit/$book->id") }}">Edit</a>
        <a class="btn btn-danger m-1" href="{{ url("/books/delete/$book->id") }}">Delete</a>
            <br>
            <a href="{{ url()->previous() }}" class="w-25 mt-2 btn btn-primary">Back</a>
        <div class="w-100 d-flex justify-content-center align-items-center">
            {{ $books->links() }}
        </div>
    </div>
@endsection
