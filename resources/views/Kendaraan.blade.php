{{-- Halaman Utama Kenderaan --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Mobil</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('kendaraan.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create new Kendaraaan</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Model</th>
                <th scope="col">Tahun</th>
                <th scope="col">Jumlah_Penumpang</th>
                <th scope="col">Manufaktur</th>
                <th scope="col">Harga</th>
                <th scope="col">Jenis_Kendaraan</th>
                <th scope="col">Tipe_Bahan_Bakar</th>
                <th scope="col">Luas_Bagasi</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($kendaraan as $kendaraans)
                <tr>
                    @php $index++ @endphp
                    
                    @if ($kendaraans->mobil)
                        <td>{{ $kendaraans['Model'] }}</td>
                        <td>{{ $kendaraans['Tahun'] }}</td>
                        <td>{{ $kendaraans['Jumlah_Penumpang'] }}</td>
                        <td>{{ $kendaraans['Manufaktur'] }}</td>
                        <td>{{ $kendaraans['Harga'] }}</td>
                        <td>{{ $kendaraans['Jenis_Kendaraan'] }}</td>
                        <td>{{ $kendaraans->mobil->Tipe_Bahan_Bakar }}</td>
                        <td>{{ $kendaraans->mobil->Luas_Bagasi }}</td>

                        <td class="text-center">
                            <form action="{{ route('kendaraan.destroy',$kendaraans->id) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('kendaraan.show', $kendaraans->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('kendaraan.edit', $kendaraans->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    @endif


                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row justify-content-center">
        <h1>Motor</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Model</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah_Penumpang</th>
                    <th scope="col">Manufaktur</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jenis_Kendaraan</th>
                    <th scope="col">Ukuran_Bagasi</th>
                    <th scope="col">Kapasitas_Bensin</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach ($kendaraan as $kendaraans)
                    <tr>
                        @php $index++ @endphp
                        
                        @if ($kendaraans->motor)
                            <td>{{ $kendaraans['Model'] }}</td>
                            <td>{{ $kendaraans['Tahun'] }}</td>
                            <td>{{ $kendaraans['Jumlah_Penumpang'] }}</td>
                            <td>{{ $kendaraans['Manufaktur'] }}</td>
                            <td>{{ $kendaraans['Harga'] }}</td>
                            <td>{{ $kendaraans['Jenis_Kendaraan'] }}</td>
                            <td>{{ $kendaraans->motor->Ukuran_Bagasi }}</td>
                            <td>{{ $kendaraans->motor->Kapasitas_Bensin }}</td>
    
                            <td class="text-center">
                                <form action="{{ route('kendaraan.destroy',$kendaraans->id) }}" method="POST">   
                                <a class="btn btn-info" href="{{ route('kendaraan.show', $kendaraans->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('kendaraan.edit', $kendaraans->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')      
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row justify-content-center">
        <h1>Truk</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Model</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Jumlah_Penumpang</th>
                    <th scope="col">Manufaktur</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jenis_Kendaraan</th>
                    <th scope="col">Jumlah_Roda_Ban</th>
                    <th scope="col">Luas_Area_Kargo</th>
                </tr>
            </thead>
            <tbody>
                @php $index = 1 @endphp
                @foreach ($kendaraan as $kendaraans)
                    <tr>
                        @php $index++ @endphp
                        
                        @if ($kendaraans->truck)
                            <td>{{ $kendaraans['Model'] }}</td>
                            <td>{{ $kendaraans['Tahun'] }}</td>
                            <td>{{ $kendaraans['Jumlah_Penumpang'] }}</td>
                            <td>{{ $kendaraans['Manufaktur'] }}</td>
                            <td>{{ $kendaraans['Harga'] }}</td>
                            <td>{{ $kendaraans['Jenis_Kendaraan'] }}</td>
                            <td>{{ $kendaraans->truck->Jumlah_Roda_Ban }}</td>
                            <td>{{ $kendaraans->truck->Luas_Area_Kargo }}</td>
    
                            <td class="text-center">
                                <form action="{{ route('kendaraan.destroy',$kendaraans->id) }}" method="POST">   
                                <a class="btn btn-info" href="{{ route('kendaraan.show', $kendaraans->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('kendaraan.edit', $kendaraans->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')      
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection