@extends('layout')
@section('title')
    Login
@endsection
@section('main')
    <div class="container  text-center p-5 text-info">
        <h1>LogIn</h1>

        @include('errors')

        @if (request()->session()->has('error-msg'))
            <div class="alert alert-danger">
                <P> {{ request()->session()->get('error-msg') }}</P>
            </div>
        @endif


        <form action="{{ url('./login') }}" method="post">
            @csrf
            <input type="email" name="email" id="" placeholder="Enter email" class="form-control  my-4">
            <input type="password" name="password" id="" placeholder="Enter password" class="form-control  my-4">
            <input type="submit" value="Login" class="form-control  my-4 btn btn-secondary">
        </form>
    </div>
@endsection
