@extends('layout.app')
@section('tittle')
    Login Page  
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('login.store') }}" method="post">
                {{ csrf_field() }}
                <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <button class="btn btn-dark mt-2" type="submit">Login</button>
            </form>
        </div>
    </div>
@endsection