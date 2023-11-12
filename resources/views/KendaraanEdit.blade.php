{{-- Halaman Edit Kendaraan --}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Add new Kenderaan</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Model : </label>
                        <input type="text" class="form-control" name="Model" value="{{ $kendaraan->Model }}" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun : </label>
                        <input type="number" class="form-control" name="Tahun" value="{{ $kendaraan->Tahun }}"required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah_Penumpang : </label>
                        <input type="number" class="form-control" name="Jumlah_Penumpang" value="{{ $kendaraan->Jumlah_Penumpang }}"required>
                    </div>
                    <div class="form-group">
                        <label>Manufaktur : </label>
                        <input type="text" class="form-control" name="Manufaktur" value="{{ $kendaraan->Manufaktur }}"required>
                    </div>
                    <div class="form-group">
                        <label>Harga : </label>
                        <input type="number" class="form-control" name="Harga" value="{{ $kendaraan->Harga }}"equired>
                    </div>

                    <select id="Jenis_Kendaraan" name="Jenis_Kendaraan" required>
                        @if ($kendaraan->Jenis_Kendaraan == "Mobil")
                            <option value="Mobil" selected>Mobil</option>
                        @else
                            <option value="Mobil">Mobil</option>
                        @endif

                        @if ($kendaraan->Jenis_Kendaraan == "Truk")
                            <option value="Truk" selected>Truk</option>
                        @else
                            <option value="Truk">Truk</option>
                        @endif

                        @if ($kendaraan->Jenis_Kendaraan == "Motor")
                            <option value="Motor" selected>Motor</option>
                        @else
                            <option value="Motor">Motor</option>
                        @endif
                    </select>

                    <div id="dynamicInput">
                        <!-- Dynamic input fields will be added here -->
                    </div>

                    <div id="dynamicInput2">
                        <!-- Dynamic input fields will be added here -->
                    </div>

                    <script>
                        var kendaraan = @json($kendaraan);
                        
                        $(document).ready(function() {
                            $('#Jenis_Kendaraan').change(function() {
                                var selectedVehicle = $(this).val();
                                var inputField = '';
                                var inputField2 = '';
                        
                                if (selectedVehicle == 'Mobil') {
                                    @if ($kendaraan->Jenis_Kendaraan == "Mobil")
                                    inputField = 'Tipe_Bahan_Bakar: <input type="text" name="Tipe_Bahan_Bakar" value="' + kendaraan.mobil.Tipe_Bahan_Bakar + '" required>';
                                    inputField2 = 'Luas_Bagasi: <input type="number" name="Luas_Bagasi" value="' + kendaraan.mobil.Luas_Bagasi + '" required>';
                                    @else
                                    inputField = 'Tipe_Bahan_Bakar: <input type="text" name="Tipe_Bahan_Bakar" required>';
                                    inputField2 = 'Luas_Bagasi: <input type="number" name="Luas_Bagasi" required>';
                                    @endif
                                } else if (selectedVehicle == 'Truk') {
                                    @if ($kendaraan->Jenis_Kendaraan == "Truk")
                                    inputField = 'Jumlah_Roda_Ban: <input type="number" name="Jumlah_Roda_Ban" value="' + kendaraan.truck.Jumlah_Roda_Ban + '" required>';
                                    inputField2 = 'Luas_Area_Kargo: <input type="number" name="Luas_Area_Kargo" value="' + kendaraan.truck.Luas_Area_Kargo + '" required>';
                                    @else
                                    inputField = 'Jumlah_Roda_Ban: <input type="number" name="Jumlah_Roda_Ban" required>';
                                    inputField2 = 'Luas_Area_Kargo: <input type="number" name="Luas_Area_Kargo"  required>';
                                    @endif
                                } else if (selectedVehicle == 'Motor') {
                                    @if ($kendaraan->Jenis_Kendaraan == "Motor")
                                    inputField = 'Ukuran_Bagasi: <input type="text" id="jumlahBan" name="Ukuran_Bagasi" value="' + kendaraan.motor.Ukuran_Bagasi + '" required>';
                                    inputField2 = 'Kapasitas_Bensin: <input type="number" name="Kapasitas_Bensin" value="' + kendaraan.motor.Kapasitas_Bensin + '" required>';
                                    @else
                                    inputField = 'Ukuran_Bagasi: <input type="number" id="jumlahBan" name="Ukuran_Bagasi" required>';
                                    inputField2 = 'Kapasitas_Bensin: <input type="number" name="Kapasitas_Bensin" required>';
                                    @endif
                                }
                        
                                $('#dynamicInput').html(inputField);
                                $('#dynamicInput2').html(inputField2);
                            }).change();
                        });
                    </script>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Edit Kendaraaan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
