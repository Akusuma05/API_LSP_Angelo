@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Order</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('order.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Order</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Order_ID</th>
                <th scope="col">Customer</th>
                <th scope="col">Kendaraan</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($orders as $Order)
                <tr>
                    @php $index++ @endphp
                    <td>{{ $Order['Order_ID'] }}</td>
                    <td>{{ $Order->customer->Nama }}</td>
                    <td>{{ $Order->kendaraan->Model }}</td>
                    <td class="text-center">
                        <form action="{{ route('order.destroy',$Order->Order_ID) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('order.show', $Order->Order_ID) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('order.edit', $Order->Order_ID) }}">Edit</a>
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection