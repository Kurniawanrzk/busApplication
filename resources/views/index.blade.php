@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('buses') }}"><button class="btn btn-dark">Buses</button></a>
            <a href="{{ route('driver') }}"><button class="btn btn-dark">Driver</button></a>
            <a href="{{ route('order') }}"><button class="btn btn-dark">Order</button></a>
            <a href="{{ route('logout') }}"><button class="btn btn-danger">Logout</button></a>
        </div>
    </div>
@endsection