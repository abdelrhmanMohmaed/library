@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid p-2">
        <h1>Edit Category - {{ $cat->name }}</h1>
        @include('errors')
        <form method="POST" action="{{ url("/cats/update/$cat->id") }}" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="" value="{{ $cat->name }}" class="form-control w-25 alert-secondary">
            <br>
            <textarea class="form-control w-25 alert-secondary" name="desc" id="" cols="30"
                rows="10">{{ $cat->desc }} </textarea>
            <br>
            <img src="{{ asset("uploads/$cat->img") }}" height="70px">
            <br>
            <input type="file" name="img" id="" placeholder="Img" class="w-25 alert-secondary my-2 p-1">

            <br>
            <input type="submit" value="Add" name="submit" class="w-25 btn btn-warning">
        </form>

        <a class="btn btn-danger text-decoration-none w-25 my-2" href="{{ url('/cats') }}">Back</a>
    </div>
@endsection
