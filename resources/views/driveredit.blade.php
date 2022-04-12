@extends('layout.app')
@section('content')
    <div class="card">
    <form action="" method="post">
        <form action="{{ route('driver.update',$driver->id) }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <label for="name">Name</label>
        <input type="text" name="name" value="{{ $driver->name}}" id="name" class="form-control" required/>
        <label for="age">Age</label>
        <input type="number" class="form-control" value="{{ $driver->age}}" name="age" id="age">
        <label for="id_driver">Driver Id</label>
        <input type="number" name="id_driver" value="{{ $driver->id_driver }}" id="id_driver" class="form-control" required/>
        <button class="btn btn-dark mt-2" type="submit">Update</button>
        </form>
    </form>
    </div>
@endsection