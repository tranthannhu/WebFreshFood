<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::with('orderDetails')->get();


        return $this->sendResponse($orders->toArray(), 'Orders retrieved successfully.');
    }
    public function lastestOrder(Order $order)
    {
        //
        $order = Order::orderBy('id', 'desc')->take(5)->get();
        return $this->sendResponse($order->toArray(), '5 lastest order retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request, Order $order)
    {
        $request->only('status');
        // dd($order ->id);
        $status = Order::where('id', $order -> id)->update(
            ['status' => $request->status]
        );
        return $this->sendResponse($status, 'Change status successfully.');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
