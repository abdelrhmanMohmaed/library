@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid p-2">

        <h1>Add Category</h1>
        @include('errors')

            {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam labore odit cumque nihil amet delectus voluptatem
            provident quia qui quisquam ea cum quas illum officia atque at laudantium impedit aliquid natus consequatur, nisi
            soluta quod id maiores. Eum quaerat rerum sed neque nihil alias sequi dolores, ipsam est provident quod? Aliquid
            maxime iure eum unde illum, exercitationem hic. Est, sunt!</p> --}}
            <form action="{{ url('/cats/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <input type="text" name="name" id="" placeholder="Name" class="form-control w-25 alert-secondary">
            <br>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Dese"
                class="form-control w-25 alert-secondary"></textarea>
            <br>
            <input type="file" name="img" id="" placeholder="Img" class="w-25 alert-secondary my-2 p-1">
            <br>
            <input type="submit" value="Add" name="submit" class="w-25 btn btn-warning">
        </form>
        <a class="btn btn-danger text-decoration-none w-25 my-2" href="{{ url('/cats') }}">Back</a>
    </div>
@endsection
