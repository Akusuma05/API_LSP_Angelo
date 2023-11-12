@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Add new Kenderaan</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('kendaraan.store') }}" method="post">
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        <label>Model : </label>
                        <input type="text" class="form-control" name="Model" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun : </label>
                        <input type="number" class="form-control" name="Tahun" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah_Penumpang : </label>
                        <input type="number" class="form-control" name="Jumlah_Penumpang" required>
                    </div>
                    <div class="form-group">
                        <label>Manufaktur : </label>
                        <input type="text" class="form-control" name="Manufaktur" required>
                    </div>
                    <div class="form-group">
                        <label>Harga : </label>
                        <input type="number" class="form-control" name="Harga" required>
                    </div>

                    <select id="Jenis_Kendaraan" name="Jenis_Kendaraan" required>
                        <option value="">Pilih Kategori</option>
                        <option value="Mobil">Mobil</option>
                        <option value="Truk">Truk</option>
                        <option value="Motor">Motor</option>
                    </select>

                    <div id="dynamicInput">
                        <!-- Dynamic input fields will be added here -->
                    </div>

                    <div id="dynamicInput2">
                        <!-- Dynamic input fields will be added here -->
                    </div>

                    <script>
                        $(document).ready(function() {
                            $('#Jenis_Kendaraan').change(function() {
                                var selectedVehicle = $(this).val();
                                var inputField = '';
                                var inputField2 = '';
                        
                                if (selectedVehicle == 'Mobil') {
                                    inputField = 'Tipe_Bahan_Bakar: <input type="text" name="Tipe_Bahan_Bakar" required>';
                                    inputField2 = 'Luas_Bagasi: <input type="number" name="Luas_Bagasi" required>';
                                } else if (selectedVehicle == 'Truk') {
                                    inputField = 'Jumlah_Roda_Ban: <input type="number" name="Jumlah_Roda_Ban" required>';
                                    inputField2 = 'Luas_Area_Kargo: <input type="number" name="Luas_Area_Kargo" required>';
                                } else if (selectedVehicle == 'Motor') {
                                    inputField = 'Ukuran_Bagasi: <input type="number" id="jumlahBan" name="Ukuran_Bagasi" required>';
                                    inputField2 = 'Kapasitas_Bensin: <input type="number" name="Kapasitas_Bensin" required>';
                                }
                        
                                $('#dynamicInput').html(inputField);
                                $('#dynamicInput2').html(inputField2);
                            });
                        });
                    </script>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Add Kendaraan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
