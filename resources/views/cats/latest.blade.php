@extends('layout')

@section('title')

@endsection

@section('main')
    <h1>latest {{ $num }} categories</h1>

    <a href="{{ url('/cats/create') }}"> Add Categories</a>
    @foreach ($cats as $cat)
        <hr>
        <h3>
            <a href="{{ url("/cats/show/$cat->id") }}">
                {{ $cat->id }} - {{ $cat->name }}
            </a>
        </h3>
        <p>{{ $cat->desc }}</p>

        <a href="{{ url('/cats') }}">Back</a>
    @endforeach
@endsection
