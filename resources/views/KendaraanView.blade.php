{{-- Halaman View Spesifik Kendaraan --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
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
            @elseif ($kendaraan->Jenis_Kendaraan == "Truk")

                <p><b>Model: </b>{{ $kendaraan->Model }}</p>
                <p><b>Tahun: </b>{{ $kendaraan->Tahun }}</p>
                <p><b>Jumlah_Penumpang: </b>{{ $kendaraan->Jumlah_Penumpang }}</p>
                <p><b>Manufaktur: </b>{{ $kendaraan->Manufaktur }}</p>
                <p><b>Harga: </b>{{ $kendaraan->Harga }}</p>
                <p><b>Jenis_Kendaraan: </b>{{ $kendaraan->Jenis_Kendaraan }}</p>
                <p><b>Jumlah_Roda_Ban: </b>{{ $kendaraan->truck->Jumlah_Roda_Ban }}</p>
                <p><b>Luas_Area_Kargo: </b>{{ $kendaraan->truck->Luas_Area_Kargo }}</p>
            @elseif ($kendaraan->Jenis_Kendaraan == "Motor")

                <p><b>Model: </b>{{ $kendaraan->Model }}</p>
                <p><b>Tahun: </b>{{ $kendaraan->Tahun }}</p>
                <p><b>Jumlah_Penumpang: </b>{{ $kendaraan->Jumlah_Penumpang }}</p>
                <p><b>Manufaktur: </b>{{ $kendaraan->Manufaktur }}</p>
                <p><b>Harga: </b>{{ $kendaraan->Harga }}</p>
                <p><b>Jenis_Kendaraan: </b>{{ $kendaraan->Jenis_Kendaraan }}</p>
                <p><b>Ukuran_Bagasi: </b>{{ $kendaraan->motor->Ukuran_Bagasi }}</p>
                <p><b>Kapasitas_Bensin: </b>{{ $kendaraan->motor->Kapasitas_Bensin }}</p>
            @endif
        </div>
    </div>

@endsection
