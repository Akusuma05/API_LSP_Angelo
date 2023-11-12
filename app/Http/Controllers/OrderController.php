<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kendaraan;
use App\Models\Mobil;
use App\Models\Motor;
use App\Models\Order;
use App\Models\Truck;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Halaman Utama Order
        $orders = Order::with(['kendaraan', 'customer'])->get();
        return view('Order', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Halaman Create Order
        $kendaraan = Kendaraan::all();
        $customer = Customer::all();
        return view('OrderCreate', compact('kendaraan', 'customer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Function Create Order
        $order = new Order;

        $order->Customer_ID = $request->Customer_ID;
        $order->Kendaraan_ID = $request->Kendaraan_ID;
    
        $order->save();
    
        return redirect(route('order.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //Halaman Show Order
        $orders = Order::where('Order_ID', $id)->first();
        $kendaraan = Kendaraan::where('id', $orders->Kendaraan_ID)->first();
        
        if($kendaraan->Jenis_Kendaraan == "Mobil"){
            $vehicle = Mobil::where('Mobil_ID', $orders->Kendaraan_ID)->first();
        } elseif ($kendaraan->Jenis_Kendaraan == "Truk") {
            $vehicle = Truck::where('Truk_ID', $orders->Kendaraan_ID)->first();
        } elseif ($kendaraan->Jenis_Kendaraan == "Motor") {
            $vehicle = Motor::where('Motor_ID', $orders->Kendaraan_ID)->first();
        }

        $customer = Customer::where('Customer_ID', $orders->Customer_ID)->first();

        return view('OrderView', compact('orders', 'kendaraan', 'customer', 'vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Halaman Edit Order
        $kendaraan = Kendaraan::all();
        $customer = Customer::all();
        $orders = Order::where('Order_ID', $id)->first();
        return view('OrderEdit', compact('orders', 'kendaraan', 'customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //Function Update Order
        Order::where('Order_ID', $id)->update([
            'Customer_ID' => $request->Customer_ID,
            'Kendaraan_ID' => $request->Kendaraan_ID,
        ]);

        return redirect(route('order.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Function Delete Order
        Order::where('Order_ID', $id)->delete();

        return redirect(route('order.index'));
    }
}
