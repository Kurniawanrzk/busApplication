@extends('layout.app')
@section('content')
    <div class="card">
    <form action="" method="post">
        <form action="{{ route('driver.store') }}" method="post">
            {{ csrf_field() }}
            <label for="name">Name</label>
        <input type="text" name="name" value="" id="name" class="form-control" required/>
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age" id="age">
        <label for="id">Driver Id</label>
        <input type="number" name="id_driver" id="id" value="" class="form-control" required/>
        <button class="btn btn-dark mt-2" type="submit">Create</button>
        </form>
    </form>
    </div>
@endsection