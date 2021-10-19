@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container-fluid p-2">
        <h1>Add Book</h1>
        @include('errors')

        {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam labore odit cumque nihil amet delectus voluptatem
        provident quia qui quisquam ea cum quas illum officia atque at laudantium impedit aliquid natus consequatur, nisi
        soluta quod id maiores. Eum quaerat rerum sed neque nihil alias sequi dolores, ipsam est provident quod? Aliquid
        maxime iure eum unde illum, exercitationem hic. Est, sunt!</p> --}}
        <form action="{{ url('/books/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="name" id="" placeholder="Name" class="form-control w-25 alert-secondary">
            <br>
            <textarea name="desc" id="" cols="30" rows="10" placeholder="Dese"
                class="form-control w-25 alert-secondary"></textarea>
            <br>
            <input type="number" name="price" id="" placeholder="price" class="form-control w-25 alert-secondary">
            <br>
            <input type="file" name="img" id="" placeholder="Img" class="w-25 alert-secondary my-2 p-1">
            <br>
            <select name="cat_id" id="" class="form-control w-25 ">
                <?php foreach ($cats as $cat): ?>
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="submit" value="Add" name="submit" class="w-25 btn btn-warning">
            <br>
            <a href="{{ url()->previous() }}" class="w-25 mt-2 btn btn-primary">Back</a>
        </form>
    </div>
@endsection
