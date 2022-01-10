<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function index()
    {
        $order = Order::with('user','product')->get();
        return view('orders.index',compact('order'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        return view('orders.edit',compact('order'));
    }
    public function update($id, Request $request)
    {
        $order = Order::find($id);
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->price= $request->price;
        $order->tax = $request->tax;
        $order->delivery_charges = $request->delivery_charges;
        $order->quantity = $request->quantity;
        $order->total = $request->total;
        $order->status = $request->status;
        $order->tracking_number = $request->tracking_number;
        $order->update();
        return redirect()->route('orders.index');
    }
    public function delete($id, Request $request)
    {
        $order= Order::find($id);
        $order->delete();
        return redirect()->route('orders.index');
    }

}

