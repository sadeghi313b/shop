<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use App\Models\Admin\Market\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.market.orders.index', compact('orders'));
    }

    public function create()
    {
        return view('admin.market.orders.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,processing,completed,cancelled',
            'total_amount' => 'required|numeric|min:0',
            'shipping_address' => 'required|string',
            'billing_address' => 'required|string',
            'payment_method' => 'required|string',
            'payment_status' => 'required|in:pending,paid,failed',
            'shipping_method' => 'required|string',
            'tracking_number' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $order = Order::create($validatedData);

        return redirect()->route('admin.market.orders.show', $order->id)->with('success', 'Order created successfully');
    }

    public function show(Order $order)
    {
        return view('admin.market.orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('admin.market.orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
            'total_amount' => 'required|numeric|min:0',
            'shipping_address' => 'required|string',
            'billing_address' => 'required|string',
            'payment_method' => 'required|string',
            'payment_status' => 'required|in:pending,paid,failed',
            'shipping_method' => 'required|string',
            'tracking_number' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $order->update($validatedData);

        return redirect()->route('admin.market.orders.show', $order->id)->with('success', 'Order updated successfully');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()->route('admin.market.orders.index')->with('success', 'Order deleted successfully');
    }
}
