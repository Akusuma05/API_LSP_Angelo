@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Add new Customer</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('customer.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Nama : </label>
                        <input type="text" class="form-control" name="Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat : </label>
                        <input type="text" class="form-control" name="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label>No_Telepon : </label>
                        <input type="number" class="form-control" name="No_Telepon" required>
                    </div>
                    <div class="form-group">
                        <label>ID_Card : </label>
                        <input type="text" class="form-control" name="ID_Card" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Add Customer</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection