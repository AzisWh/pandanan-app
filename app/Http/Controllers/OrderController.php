<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ReservasiItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        $reservasiItem = ReservasiItem::findOrFail($request->package_id);
        
        return view('orders.create', compact('reservasiItem'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reservasiitem_id' => 'required|exists:reservasiitems,id',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'whatsapp' => 'required|string|max:15',
            'payment_account' => 'required|string|max:255',
            'payment_proof' => 'required|image|max:2048',
        ]);


        $originalFileName = $request->file('payment_proof')->getClientOriginalName();
        $paymentProofPath = $request->file('payment_proof')->storeAs('Order', $originalFileName, 'public');

        $order = Order::create([
            'reservasiitem_id' => $request->reservasiitem_id,
            'name' => $request->name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'payment_account' => $request->payment_account,
            'payment_proof' => $paymentProofPath,
            'status' => 'pending',
        ]);

        // Optionally, send an email or WhatsApp notification here

        return redirect()->route('order.confirmation', $order->id)->with('success', 'Order placed successfully. Please wait for confirmation.');
    }

    public function confirmation($orderId)
    {
        $order = Order::findOrFail($orderId);

        return view('orders.confirmation', compact('order'));
    }
}
