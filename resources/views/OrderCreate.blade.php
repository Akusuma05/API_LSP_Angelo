@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Add new Order</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('order.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Kendaraan_ID : </label>
                        <select name="Kendaraan_ID" class="custom-select">
                            @foreach ($kendaraan as $kendaraans)
                                    <option value="{{$kendaraans['id']}}">{{ $kendaraans['Model'] }}</option>                               
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Customer_ID : </label>
                        <select name="Customer_ID" class="custom-select">
                            @foreach ($customer as $customers)
                                <option value="{{$customers['Customer_ID']}}">{{ $customers['Nama'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Add Order</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
