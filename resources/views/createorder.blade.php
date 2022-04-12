@foreach ($bus as $item)
@foreach ($order as $orders)
@if ($item->plate_num === $orders->bus)
    sa
@else
@endif
@endforeach
@endforeach

@extends('layout.app')
@section('content')
    <div class="card">
    <form action="" method="post">
        <form action="{{ route('order.store') }}" method="post">
            {{ csrf_field() }}
            <label for="Contact Name ">Contact Name </label>
        <input type="text" name="contact_name" value="" id="Contact Name" class="form-control" required/>
        <label for="contact_phone">Contact Phone</label>
        <input type="number" class="form-control" name="contact_phone" id="contact_phone">
        <label for="Start Rent Day">Start Rent Day</label>
        <input type="date" name="start_rent_day" id="Start Rent Day" value="" class="form-control" required/>
        <label for="End Rent Day">End Rent Day</label>
        <input type="date" name="end_rent_day" id="End Rent Day" value="" class="form-control" required/>
        <label for="Total Rent Day">Total Rent Day</label>
        <input type="number" name="total_rent_day" id="Total Rent Day" value="" class="form-control" required/>
        <label for="driver">Driver</label>
        <select name="driver" id="driver" class="form-control" required>
            <option value="">--</option>
            @foreach ($driver as $item)
            <option value="{{ $item->name }}">{{ $item->name }}</option>
            @endforeach
        </select>
        <label for="Bus">Bus</label>
        <select name="bus" id="Bus" class="form-control" required>
            <option value="">--</option>
            @foreach ($bus as $item)
            <option id="buses" name="hide" value="{{ $item->plate_num }}">{{ $item->plate_num }}</option>
            @endforeach
        </select>
        <button class="btn btn-dark mt-2" type="submit">Create</button>
        </form>
    </form>
    </div>
    {{-- <script>
        
        const erd = document.getElementById('End Rent Day').value;
        const srd = document.getElementById('Start Rent Day').value;
        const trd = document/getElementById('Total Rent Day').value;
        trd = 10 + 3;

    </script> --}}
@endsection


