<?php

namespace App\Http\Controllers;

use App\Mail\UserOrderConfirmation;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderAdminController extends Controller
{
    public function index()
    {
        $orders = Order::with('reservasiItem')->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function edit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        if ($request->status === 'confirmed') {
            Mail::to($order->email)->send(new UserOrderConfirmation($order));
        }

        return redirect()->route('admin.orders.index')->with('success', 'Order status updated successfully and email has been sent.');
    }
}
