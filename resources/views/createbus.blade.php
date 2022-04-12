@extends('layout.app')
@section('content')
    <div class="card">
    <form action="" method="post">
        <form action="{{ route('bus.store') }}" method="post">
            {{ csrf_field() }}
            <label for="plate">Plate Number</label>
        <input type="text" name="plate_num" value="" id="plate" class="form-control" required/>
        <label for="brand">Brand Car</label>
        <select class="form-control" value="" name="brandcar" id="brand" required>
            <option value="">--</option>
            <option value="Scania">Scania</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Fuso">Fuso</option>
        </select>
        <label for="seat">Seat</label>
        <input type="integer" name="seat" id="seat" value="" class="form-control" required/>
        <label for="price">Price/Day</label>
        <input type="integer" name="price" value="" id="price" class="form-control" required/>
        <button class="btn btn-dark mt-2" type="submit">Create</button>
        </form>
    </form>
    </div>
@endsection