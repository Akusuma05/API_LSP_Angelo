<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kendaraan;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Tampilan Awal Customer
        $customer = Customer::all();
        return view('Customer', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Tampilan Create Customer
        return view('CustomerCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Menyimpan Data Customer
        $customer = new Customer();

        $customer->Nama = $request->Nama;
        $customer->Alamat = $request->Alamat;
        $customer->No_Telepon = $request->No_Telepon;
        $customer->ID_Card = $request->ID_Card;

        $customer->save();

        return redirect(route('customer.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Menyimpan Show Customer
        $customer = Customer::where('Customer_ID', $id)->first();
        $orders = Order::where('Customer_ID', $id)->get();
        $kendaraan = [];
        $totalHarga = 0;

        foreach($orders as $o){
            $k = Kendaraan::with(['mobil', 'motor', 'truck'])->where('id', $o->Kendaraan_ID)->first();
            $kendaraan[] = $k;
            $totalHarga += $k->Harga;
        }
        return view('CustomerView', compact('customer', 'orders', 'kendaraan', 'totalHarga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit Customer
        $customer = Customer::where('Customer_ID', $id)->first();

        return view('CustomerEdit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Function Update Customer
        Customer::where('Customer_ID', $id)->update([
            'Nama' => $request->Nama,
            'Alamat' => $request->Alamat,
            'No_Telepon' => $request->No_Telepon,
            'ID_Card' => $request->ID_Card,
        ]);

        return redirect(route('customer.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Delete Customer
        Customer::where('Customer_ID', $id)->delete();
        return redirect(route('customer.index'));
    }
}
