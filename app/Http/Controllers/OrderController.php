<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Inertia\Inertia;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();

        return inertia('Order', [
            'orders' => $orders
        ]);
    }
    public function show(Order $order)
    {
        return Inertia::render('orders/view', ['order' => $order]);
    }
    

    public function create()
    {
        return inertia('orders/create'); 
    }
    

    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'total_amount' => 'required|numeric|min:0',
        'status' => 'required|in:pending,completed,cancelled',
    ]);

    $order = new Order();
    $order->user_id = $request->user_id;
    $order->total_amount = $request->total_amount;
    $order->status = $request->status;
    $order->save();

    return redirect('/orders')->with('success', 'Order created successfully');
}


    public function update(Request $request, Order $order)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_amount' => 'required|numeric|min:0',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        $order->update($validatedData);

        return redirect('/orders');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('/orders')->with('success', 'Order deleted successfully');
    }
}
