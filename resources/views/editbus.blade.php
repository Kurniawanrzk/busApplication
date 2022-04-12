@extends('layout.app')
@section('content')
    <div class="card">
    <form action="" method="post">
        <form action="{{ route('bus.update',$bus->id) }}" method="post">
            @method('PUT')
            {{ csrf_field() }}
            <label for="plate">Plate Number</label>
        <input type="text" name="plate_num" value="{{ $bus->plate_num }}" id="plate" class="form-control" required/>
        <label for="brand">Brand Car</label>
        <select class="form-control" value="{{ $bus->brandcar }}" name="brandcar" id="brand" required>
            <option value="">--</option>
            <option value="Scania">Scania</option>
            <option value="Mercedes">Mercedes</option>
            <option value="Fuso">Fuso</option>
        </select>
        <label for="seat">Seat</label>
        <input type="integer" name="seat" id="seat" value="{{ $bus->seat }}" class="form-control" required/>
        <label for="price">Price/Day</label>
        <input type="integer" name="price" value="{{ $bus->price }}" id="price" class="form-control" required/>
        <button class="btn btn-dark mt-2" type="submit">Update</button>
        </form>
    </form>
    </div>
@endsection