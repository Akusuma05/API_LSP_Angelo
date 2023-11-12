@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Customer</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('customer.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create new Customer</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No_Telepon</th>
                <th scope="col">ID_Card</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($customer as $customers)
                <tr>
                    @php $index++ @endphp
                    <td>{{ $customers['Nama'] }}</td>
                    <td>{{ $customers['Alamat'] }}</td>
                    <td>{{ $customers['No_Telepon'] }}</td>
                    <td>{{ $customers['ID_Card'] }}</td>
                    <td class="text-center">
                        <form action="{{ route('customer.destroy',$customers->Customer_ID) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('customer.show', $customers->Customer_ID) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('customer.edit', $customers->Customer_ID) }}">Edit</a>
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