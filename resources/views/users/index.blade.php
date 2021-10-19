@extends('layout')

@section('title')

@endsection

@section('main')
    <div class=" container p-2">
        <h1>All Users: </h1>

        <table class="table my-4 table-hover ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    <th scope="col">created</th>
                </tr>
            </thead>

            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <th scope="row">{{ $user->id  }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                </tbody>
            @endforeach
        </table>

    </div>
@endsection
