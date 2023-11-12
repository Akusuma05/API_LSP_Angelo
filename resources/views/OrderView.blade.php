@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Detail Order</h1>
            <p><b>Id : </b>{{ $orders->Order_ID }}</p>
            <p><b>Customer_ID : </b>{{ $orders->Customer_ID }}</p>
            <p><b>Kendaraan_ID : </b>{{ $orders->Kendaraan_ID }}</p>
            
            <h1>Detail Customer</h1>
            <p><b>Nama: </b>{{ $customer->Nama }}</p>
            <p><b>Alamat: </b>{{ $customer->Alamat }}</p>
            <p><b>No_Telepon: </b>{{ $customer->No_Telepon }}</p>
            <p><b>ID_Card: </b>{{ $customer->ID_Card }}</p>

            <h1>Detail Kendaraan</h1>
            @if ($kendaraan->Jenis_Kendaraan == "Mobil")

                <p><b>Model: </b>{{ $kendaraan->Model }}</p>
                <p><b>Tahun: </b>{{ $kendaraan->Tahun }}</p>
                <p><b>Jumlah_Penumpang: </b>{{ $kendaraan->Jumlah_Penumpang }}</p>
                <p><b>Manufaktur: </b>{{ $kendaraan->Manufaktur }}</p>
                <p><b>Harga: </b>{{ $kendaraan->Harga }}</p>
                <p><b>Jenis_Kendaraan: </b>{{ $kendaraan->Jenis_Kendaraan }}</p>
                <p><b>Tipe_Bahan_Bakar: </b>{{ $kendaraan->mobil->Tipe_Bahan_Bakar }}</p>
                <p><b>Luas_Bagasi: </b>{{ $kendaraan->mobil->Luas_Bagasi }}</p>
            @elseif ($kendaraan->Jenis_Kendaraan = "Truk")

                <p><b>Model: </b>{{ $kendaraan->Model }}</p>
                <p><b>Tahun: </b>{{ $kendaraan->Tahun }}</p>
                <p><b>Jumlah_Penumpang: </b>{{ $kendaraan->Jumlah_Penumpang }}</p>
                <p><b>Manufaktur: </b>{{ $kendaraan->Manufaktur }}</p>
                <p><b>Harga: </b>{{ $kendaraan->Harga }}</p>
                <p><b>Jenis_Kendaraan: </b>{{ $kendaraan->Jenis_Kendaraan }}</p>
                <p><b>Jumlah_Roda_Ban: </b>{{ $vehicle->Jumlah_Roda_Ban }}</p>
                <p><b>Luas_Area_Kargo: </b>{{ $vehicle->Luas_Area_Kargo }}</p>
            @elseif ($kendaraan->Jenis_Kendaraan = "Motor")

                <p><b>Model: </b>{{ $kendaraan->Model }}</p>
                <p><b>Tahun: </b>{{ $kendaraan->Tahun }}</p>
                <p><b>Jumlah_Penumpang: </b>{{ $kendaraan->Jumlah_Penumpang }}</p>
                <p><b>Manufaktur: </b>{{ $kendaraan->Manufaktur }}</p>
                <p><b>Harga: </b>{{ $kendaraan->Harga }}</p>
                <p><b>Jenis_Kendaraan: </b>{{ $kendaraan->Jenis_Kendaraan }}</p>
                <p><b>Ukuran_Bagasi: </b>{{ $vehicle->Ukuran_Bagasi }}</p>
                <p><b>Kapasitas_Bensin: </b>{{ $vehicle->Kapasitas_Bensin }}</p>
            @endif
        </div>
    </div>

@endsection
