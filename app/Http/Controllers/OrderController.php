<?php

namespace App\Http\Controllers;

use App\Mail\OrderNotification;
use App\Models\Order;
use App\Models\ReservasiItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'start_date' => 'required|date', 
            'end_date' => 'required|date|after_or_equal:start_date',
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
            'start_date' => $request->start_date,  
            'end_date' => $request->end_date,      
        ]);

        $adminEmail = 'azis.hibatul2004@gmail.com'; 
        Mail::to($adminEmail)->send(new OrderNotification($order));

        return redirect()->route('order.confirmation', $order->id)->with('success', 'Order placed successfully. Please wait for confirmation.');
    }

    public function confirmation($orderId)
    {
        $order = Order::findOrFail($orderId);

        return view('orders.confirmation', compact('order'));
    }
}
