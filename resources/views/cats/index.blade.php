@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid ">
        @if (request()->session()->has('success-msg'))
            <div class="alert alert-success text-center">
                <P> {{ request()->session()->get('success-msg') }}</P>
            </div>
        @endif
        <span class="text-center ">
            <h1>All Categories</h1>
            <h6>
                <a href="{{ url('/cats/create') }}"> Add Categories</a>
                <br> 
                <a href="{{ url('/books/create') }}"> Add Book</a>
            </h6>
        </span>


        @foreach ($cats as $cat)
            <hr>
            <h3>
                <a href="{{ url("/cats/show/$cat->id") }}">
                    {{ $cat->id }} - {{ $cat->name }}
                </a>
            </h3>

            <img src="{{ asset("uploads/$cat->img") }}" alt="" srcset="" height="70px">

            <p>{{ $cat->desc }}</p>
            <a class="btn btn-secondary " href="{{ url("/cats/edit/$cat->id") }}">Edit</a>
            <a class="btn btn-danger m-1" href="{{ url("/cats/delete/$cat->id") }}">Delete</a>
        @endforeach
         
        <div class="w-100 d-flex justify-content-center align-items-center">
            {{ $cats->links() }}
        </div>
    </div>
@endsection
