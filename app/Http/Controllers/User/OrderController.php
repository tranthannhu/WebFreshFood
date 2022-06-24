<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Admin\BaseController;
use App\Http\Requests\OrderStoreRequest;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderStoreRequest $request)
    {
        //
        $request->merge([
            'user_id' => Auth::id(),
            'status' => 0
        ]);
        $input = $request->all();
//        dd($input);
        $orderDetails = $input['order_details'];

        foreach ($orderDetails as $orderDetail) {
            $id = $orderDetail['product_id'];
            $product = Product::find($id);
            $product->quantity_sell += $orderDetail['quantity']; 
            $quantity_sell = $product->quantity_sell;
            $ok = Product::updateOrCreate(
                ['id' => $id],
                ['quantity_sell' => $quantity_sell]
            );
        }

        $amount = 0;
        foreach ($orderDetails as $orderDetail) {
            $product = Product::find($orderDetail['product_id']);
            if($product->discount_percent > 0) {
                $price = $product->sell_price - $product->sell_price*$product->discount_percent;
            } else {
                $price = $product->sell_price;
            }
            $orderDetail['price'] = $price;
            $orderDetail['amount'] = $price*$orderDetail['quantity'];
            $amount += $price*$orderDetail['quantity'];
//            $orderDetail->order_id = $order->id;

        }
        $input['amount'] = $amount;
        $order = Order::create($input);
        foreach ($orderDetails as $orderDetail) {
            $product = Product::find($orderDetail['product_id']);
            if($product->discount_percent > 0) {
                $price = $product->sell_price - $product->sell_price*$product->discount_percent;
            } else {
                $price = $product->sell_price;
            }
            $orderDetail['price'] = $price;
            $orderDetail['amount'] = $price*$orderDetail['quantity'];

            $orderDetail['order_id'] = $order->id;
            OrderDetail::create($orderDetail);
        }


        return $this->sendResponse($order->toArray(), 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
