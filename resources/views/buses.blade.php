@extends('layout.app')
@section('content')
    <div class="card d-block">
        <a href="{{ route('bus.create') }}"><button class="btn btn-dark p-2 m-2">Create New Bus</button></a>        <a href="{{ route('index') }}"><button class="btn btn-dark p-2 m-2">Go Back Home</button></a>

        <table class="table bordered-table">
            <thead class=""> 
                <tr>
                    <th>#</th>
                    <th>Plate Number</th>
                    <th>Brand Car</th>
                    <th>Seat</th>
                    <th>Price/day</th>  
                    <th></th>
                </tr>
            </thead>
            @foreach ($bus as $item)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->plate_num }}</td>
                    <td>{{ $item->brandcar }}</td>
                    <td>{{ $item->seat }}</td>
                    <td>{{ $item->price }} </td>
                    <td><a href="{{ url('buses/'.$item->id.'/delete') }}"><button class="btn btn-danger">Delete</button></a>&nbsp;<a href="{{ url('buses/'.$item->id.'/edit') }}"><button class="btn btn-primary">Update</button></a>
                </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection