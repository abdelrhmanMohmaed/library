@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid p-2">
        <h1>Search Categories for {{ $keyword }}</h1>

        <a class="btn btn-dark" href="{{ url('/cats') }}">Back to all</a>


        @foreach ($cats as $cat)
        
            <h3>
                <a href="{{ url("/cats/show/$cat->id") }}">
                    {{ $cat->id }} - {{ $cat->name }}
                </a>
            </h3>
            <p>{{ $cat->desc }}</p>

            <a class="btn btn-danger " href="{{ url("/cats/delete/$cat->id") }}">Delete</a>
            <a class="btn btn-secondary m-1" href="{{ url("/cats/edit/$cat->id") }}">edit</a>
        @endforeach
    </div>
@endsection
