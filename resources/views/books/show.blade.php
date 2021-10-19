@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container  py-5">
        <h1>Show Books - {{ $book->name }}</h1>

        <hr>
        <h3>{{ $book->id }} - {{ $book->name }}</h3>
        <h5>Catrogry : <a href="{{ url('/cats/show/' . $book->cat->id) }}">{{ $book->cat->name }}</a></h5>
        <p>{{ $book->desc }}</p>
        <p>price: {{ $book->price }}</p>
        <small>created at : {{ $book->created_at }}</small>
            <br>
            <a href="{{ url()->previous() }}" class="w-25 mt-2 btn btn-primary">Back</a>
    </div>
@endsection
