@extends('template')

@section('content')
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand">
                <h2>Crud</h2>
            </a>
            <form class="d-flex">
                <a href="{{url('/create')}}" class="btn btn-success" type="submit">Create</a>
            </form>
        </div>
    </nav>

    <div class="container" style="margin-top: 50px">
        <table class="table table-bordered">
            <tr class="text-center">
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($laptop as $l)
                <tr class="text-center" style="vertical-align: 10px">
                    <th>{{$loop->iteration}}</th>
                    <td>{{$l->name}}</td>
                    <td>{{$l->price}}</td>
                    <td>
                        <img src="{{url('storage/' .$l->image)}}" style="max-width: 100px !important" alt="">
                    </td>
                    <td>
                        <form class="container" action=""
                            enctype="multipart/form-data">
                            <a href="" class="btn btn-warning" type="submit">Edit</a>
                            <button type="submit" href=""
                                class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div
@endsection
