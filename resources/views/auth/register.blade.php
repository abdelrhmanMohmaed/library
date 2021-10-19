@extends('layout')

@section('title')
    Register
@endsection
@section('main')
    <div class="container  text-center p-5 text-info">
        <h1>Register</h1>

        @include('errors')

        
        <form action="{{ url('./register') }}" method="post">
            @csrf
            <input type="text" name="name" id="" placeholder="Enter name" class="form-control  my-4">
            <input type="email" name="email" id="" placeholder="Enter email" class="form-control  my-4">
            <input type="password" name="password" id="" placeholder="Enter password" class="form-control  my-4">
            <input type="password" name="password_confirmation" id="" placeholder="Repassword"
                class="form-control  my-4">
            <input type="submit" value="Register" class="form-control  my-4 btn btn-secondary">


        </form>
    </div>
@endsection
