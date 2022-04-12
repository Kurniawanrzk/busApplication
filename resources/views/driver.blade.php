@extends('layout.app')
@section('content')
    <div class="card d-block">
        <a href="{{ route('driver.create') }}"><button class="btn btn-dark p-2 m-2">Create New Driver</button></a> <a href="{{ route('index') }}"><button class="btn btn-dark p-2 m-2">Go Back Home</button></a>
        <table class="table bordered-table">
            <thead class=""> 
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Driver Id</th>  
                    <th></th>
                </tr>
            </thead>
            @foreach ($driver as $item)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->id_driver }}</td>
                    <td><a href="{{ url('driver/'.$item->id.'/delete') }}"><button class="btn btn-danger">Delete</button></a>&nbsp;<a href="{{ url('driver/'.$item->id.'/edit') }}"><button class="btn btn-primary">Update</button></a>
                </td>
                    
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endsection