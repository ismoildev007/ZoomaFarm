<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
        ]);

        Order::create($request->all());

        return redirect()->back()->with('success', 'Zayafka muvaffaqiyatli qabul qilindi!');
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('admin.orders.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'nullable|string',
            'status' => 'required|string|in:new,processing,completed',
        ]);

        $order = Order::findOrFail($id);
        $order->update($request->all());

        return redirect()->route('orders.index')->with('success', 'Order muvaffaqiyatli yangilandi.');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order muvaffaqiyatli o\'chirildi.');
    }
}

