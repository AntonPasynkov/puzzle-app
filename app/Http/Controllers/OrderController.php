<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders', $orders));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'price' => 'required|integer',
            'delivery_address' => 'required|max:255',
        ]);

        $order = Order::create($attributes);
        return redirect('/orders/' . $order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('orders.show', compact('order', $order));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('orders.edit', compact('order', $order));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $attributes = $request->validate([
            'last_name' => 'required|max:255',
            'first_name' => 'required|max:255',
            'middle_name' => 'required|max:255',
            'price' => 'required|integer',
            'delivery_address' => 'required|max:255',
        ]);
        $order->update($attributes);
        $request->session()->flash('message', 'Successfully modified the order!');
        return redirect('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Order $order)
    {
        $order->delete();
        $request->session()->flash('message', 'Successfully deleted the order!');
        return redirect('orders');
    }
}
