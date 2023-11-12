@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Order</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('order.update', $orders->Order_ID) }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Kendaraan_ID : </label>
                        <select name="Kendaraan_ID" class="custom-select">
                            @foreach ($kendaraan as $kendaraans)
                                @if ($kendaraans['id'] == $orders['Kendaraan_ID'])
                                    <option value="{{$kendaraans['id']}}"selected>{{ $kendaraans['Model'] }}</option>
                                @else
                                    <option value="{{$kendaraans['id']}}">{{ $kendaraans['Model'] }}</option>                               @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Customer_ID : </label>
                        <select name="Customer_ID" class="custom-select">
                            @foreach ($customer as $customers)
                                @if ($customers['Customer_ID'] == $orders['Customer_ID'])
                                    <option value="{{$customers['Customer_ID']}}"selected>{{ $customers['Nama'] }}</option>
                                @else
                                    <option value="{{$customers['Customer_ID']}}">{{ $customers['Nama'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Edit Order</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
