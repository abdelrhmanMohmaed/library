@extends('layout')

@section('title')

@endsection

@section('main')
    <div class="container py-5">
        <h1>Show category - {{ $cat->name }}</h1>

        <h3>{{ $cat->id }} - {{ $cat->name }}</h3>
        <p>{{ $cat->desc }}</p>
        <small>created at : {{ $cat->created_at }}</small>
        <h5>Books: </h5>
        <ul>
            <?php foreach ($cat->books as $book): ?>
            <li><a href="{{ url("books/show/$book->id") }}">{{ $book->name }}</a></li>
            <?php endforeach; ?>
        </ul>
        <a href="{{ url('/cats') }}">Back</a>
    </div>
@endsection
