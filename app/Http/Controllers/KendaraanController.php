<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Truck;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Utama Kendaraan
        $kendaraan = Kendaraan::with(['mobil', 'motor', 'truck'])->get();
        return view('Kendaraan', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //Halaman Create Kendaraan
        return view('kendaraanCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //Function Create Kendaraan
        $kenderaan = new Kendaraan();

        $kenderaan->Model = $request->input('Model');
        $kenderaan->Tahun = $request->input('Tahun');
        $kenderaan->Jumlah_Penumpang = $request->input('Jumlah_Penumpang');
        $kenderaan->Manufaktur = $request->input('Manufaktur');
        $kenderaan->Harga = $request->input('Harga');
        $kenderaan->Jenis_Kendaraan = $request->input('Jenis_Kendaraan');
        
        $kenderaan->save();

        if ($request->input('Jenis_Kendaraan') == "Mobil"){
            $car = new Mobil();
            $car->Mobil_ID = $kenderaan->id;
            $car->Tipe_Bahan_Bakar = $request->input('Tipe_Bahan_Bakar');
            $car->Luas_Bagasi = $request->input('Luas_Bagasi');

            $car->save();
            
        } elseif ($request->input('Jenis_Kendaraan') == "Motor"){
            $motor = new Motor();
            $motor->Motor_ID = $kenderaan->id;
            $motor->Ukuran_Bagasi = $request->input('Ukuran_Bagasi');
            $motor->Kapasitas_Bensin = $request->input('Kapasitas_Bensin');
        
            $motor->save();
    
        } elseif ($request->input('Jenis_Kendaraan') == "Truk"){
            $truk = new Truck();
            $truk->Truk_ID = $kenderaan->id;
            $truk->Jumlah_Roda_Ban = $request->input('Jumlah_Roda_Ban');
            $truk->Luas_Area_Kargo = $request->input('Luas_Area_Kargo');
        
            $truk->save();
        }

        return redirect(route('kendaraan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Show Kendaraan
        $kendaraan = Kendaraan::with(['mobil', 'motor', 'truck'])->where('id', $id)->first();
        return view('KendaraanView', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman edit Kendaraan
        $kendaraan = Kendaraan::with(['mobil', 'motor', 'truck'])->where('id', $id)->first();
        return view('KendaraanEdit', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         //Function Update Kendaraan
        $k = Kendaraan::where('id', $id)->first();

        if($request->Jenis_Kendaraan == $k->Jenis_Kendaraan){
            Kendaraan::where('id', $id)->update([
                'Model' => $request->Model,
                'Tahun' => $request->Tahun,
                'Jumlah_Penumpang' => $request->Jumlah_Penumpang,
                'Manufaktur' => $request->Manufaktur,
                'Harga' => $request->Harga,
                'Jenis_Kendaraan'=> $request->Jenis_Kendaraan
            ]);
            
            if ($request->input('Jenis_Kendaraan') == "Mobil"){
                Mobil::where('Mobil_ID', $id)->update([
                    'Mobil_ID' => $request->id,
                    'Tipe_Bahan_Bakar' => $request->Tipe_Bahan_Bakar,
                    'Luas_Bagasi' => $request->Luas_Bagasi,
                ]);
                
            } elseif ($request->input('Jenis_Kendaraan') == "Motor"){
                Motor::where('Motor_ID', $id)->update([
                    'Motor_ID' => $request->id,
                    'Ukuran_Bagasi' => $request->Ukuran_Bagasi,
                    'Kapasitas_Bensin' => $request->Kapasitas_Bensin,
                ]);
        
            } elseif ($request->input('Jenis_Kendaraan') == "Truk"){
                Truck::where('Truck_ID', $id)->update([
                    'Truck_ID' => $request->id,
                    'Jumlah_Roda_Ban' => $request->Jumlah_Roda_Ban,
                    'Luas_Area_Kargo' => $request->Luas_Area_Kargo,
                ]);
            }

        }else{
            
            
            if ($request->input('Jenis_Kendaraan') == "Mobil"){
                if ($k->Jenis_Kendaraan == "Mobil"){
                    Mobil::where('Mobil_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Motor"){
                    Motor::where('Motor_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Truk"){
                    Truck::where('Truk_ID', $id)->delete();
                }
                Kendaraan::where('id', $id)->delete();
                $kenderaan = new Kendaraan();
            
                $kenderaan->Model = $request->input('Model');
                $kenderaan->Tahun = $request->input('Tahun');
                $kenderaan->Jumlah_Penumpang = $request->input('Jumlah_Penumpang');
                $kenderaan->Manufaktur = $request->input('Manufaktur');
                $kenderaan->Harga = $request->input('Harga');
                $kenderaan->Jenis_Kendaraan = $request->input('Jenis_Kendaraan');
        
                $kenderaan->save();
                $car = new Mobil();

                $car->Mobil_ID = $kenderaan->id;
                $car->Tipe_Bahan_Bakar = $request->input('Tipe_Bahan_Bakar');
                $car->Luas_Bagasi = $request->input('Luas_Bagasi');

                $car->save();
            } elseif ($request->input('Jenis_Kendaraan') == "Motor"){
                if ($k->Jenis_Kendaraan == "Mobil"){
                    Mobil::where('Mobil_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Motor"){
                    Motor::where('Motor_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Truk"){
                    Truck::where('Truk_ID', $id)->delete();
                }
                Kendaraan::where('id', $id)->delete();
                $kenderaan = new Kendaraan();
            
                $kenderaan->Model = $request->input('Model');
                $kenderaan->Tahun = $request->input('Tahun');
                $kenderaan->Jumlah_Penumpang = $request->input('Jumlah_Penumpang');
                $kenderaan->Manufaktur = $request->input('Manufaktur');
                $kenderaan->Harga = $request->input('Harga');
                $kenderaan->Jenis_Kendaraan = $request->input('Jenis_Kendaraan');
        
                $kenderaan->save();
                $motor = new Motor();

                $motor->Motor_ID = $kenderaan->id;
                $motor->Ukuran_Bagasi = $request->input('Ukuran_Bagasi');
                $motor->Kapasitas_Bensin = $request->input('Kapasitas_Bensin');
                
                $motor->save();
        
            } elseif ($request->input('Jenis_Kendaraan') == "Truk"){
                if ($k->Jenis_Kendaraan == "Mobil"){
                    Mobil::where('Mobil_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Motor"){
                    Motor::where('Motor_ID', $id)->delete();
                    
                } elseif ($k->Jenis_Kendaraan == "Truk"){
                    Truck::where('Truk_ID', $id)->delete();
                }
                Kendaraan::where('id', $id)->delete();
                $kenderaan = new Kendaraan();
            
                $kenderaan->Model = $request->input('Model');
                $kenderaan->Tahun = $request->input('Tahun');
                $kenderaan->Jumlah_Penumpang = $request->input('Jumlah_Penumpang');
                $kenderaan->Manufaktur = $request->input('Manufaktur');
                $kenderaan->Harga = $request->input('Harga');
                $kenderaan->Jenis_Kendaraan = $request->input('Jenis_Kendaraan');
        
                $kenderaan->save();

                $truk = new Truck();

                $truk->Truk_ID = $kenderaan->id;
                $truk->Jumlah_Roda_Ban = $request->input('Jumlah_Roda_Ban');
                $truk->Luas_Area_Kargo = $request->input('Luas_Area_Kargo');
                
                $truk->save();
            }
        }
        return redirect(route('kendaraan.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         //Function Delete Kendaraan
        $k = Kendaraan::where('id', $id)->first();
        if ($k->Jenis_Kendaraan == "Mobil"){
            Mobil::where('Mobil_ID', $id)->delete();
        } elseif ($k->Jenis_Kendaraan == "Motor"){
            Motor::where('Motor_ID', $id)->delete();
        } elseif ($k->Jenis_Kendaraan == "Truk"){
            Truck::where('Truk_ID', $id)->delete();
        }

        Kendaraan::where('id', $id)->delete();
        return redirect(route('kendaraan.index'));
    }
}
