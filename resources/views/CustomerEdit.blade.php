{{-- Halaman Edit Customer --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Customer</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('customer.update', $customer->Customer_ID) }}" method="post">
                    {{ csrf_field() }}
                <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" class="form-control" name="Nama" value="{{ $customer->Nama }}" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat : </label>
                        <input type="text" class="form-control" name="Alamat" value="{{ $customer->Alamat }}"required>
                    </div>
                    <div class="form-group">
                        <label>No_Telepon : </label>
                        <input type="number" class="form-control" name="No_Telepon" value="{{ $customer->No_Telepon }}"required>
                    </div>
                    <div class="form-group">
                        <label>ID_Card : </label>
                        <input type="text" class="form-control" name="ID_Card" value="{{ $customer->ID_Card }}" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Edit Customer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
