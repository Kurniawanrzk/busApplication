@extends('layout.app')
@section('content')
    <div class="card d-block">
        <a href="{{ route('order.create') }}"><button class="btn btn-dark p-2 m-2">Create New Order</button></a> <a href="{{ route('index') }}"><button class="btn btn-dark p-2 m-2">Go Back Home</button></a>
        <table class="table bordered-table">
            <thead class=""> 
                <tr>
                    <th>#</th>
                    <th>Contact Name</th>
                    <th>Contact Phone</th>
                    <th>End rent Day</th>  
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->contact_name }}</td>
                    <td>{{ $item->contact_phone }}</td>
                    <td>{{ $item->end_rent_day }}</td>    
                              
                    <td style="display:none">@if ( $item->end_rent_day < date('Y-m-d') )
                        {{ App\Models\Order::destroy($item->id) }}                    
                        @else
                        @endif
                    </td>
                    <td><a href=""><button class="btn btn-danger">Delete</button></a>&nbsp;<a href=""><button class="btn btn-primary">Update</button></a>
                </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

