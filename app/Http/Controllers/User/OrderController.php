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
            if ($product->discount_percent > 0) {
                $price = $product->sell_price - $product->sell_price * $product->discount_percent;
            } else {
                $price = $product->sell_price;
            }
            $orderDetail['price'] = $price;
            $orderDetail['amount'] = $price * $orderDetail['quantity'];
            $amount += $price * $orderDetail['quantity'];
            //            $orderDetail->order_id = $order->id;

        }
        $input['amount'] = $amount;
        $order = Order::create($input);
        foreach ($orderDetails as $orderDetail) {
            $product = Product::find($orderDetail['product_id']);
            if ($product->discount_percent > 0) {
                $price = $product->sell_price - $product->sell_price * $product->discount_percent;
            } else {
                $price = $product->sell_price;
            }
            $orderDetail['price'] = $price;
            $orderDetail['amount'] = $price * $orderDetail['quantity'];

            $orderDetail['order_id'] = $order->id;
            OrderDetail::create($orderDetail);
        }


        return $this->sendResponse($order->toArray(), 'Order created successfully.');
    }

    public function vnpay_payment(Request $request)
    {
        session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://laracasts.com/";
        $vnp_TmnCode = "6ZXSNXF4"; //Mã website tại VNPAY 
        $vnp_HashSecret = "CHIELZYOGBIOOTXRUMGYBWUBAMECJMJD"; //Chuỗi bí mật

        $vnp_TxnRef = '1234x5d'; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'test vnpay';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = 207000 * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,

        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
        //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        // }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
        // vui lòng tham khảo thêm tại code demo
    }
    public function return(Request $request)
    { 
        // session(['cost_id' => $request->id]);
        session(['url_prev' => url()->previous()]);
        $url = session('url_prev', '/');
        // dd($url);
        if ($request->vnp_ResponseCode == "00") {
            $this->apSer->thanhtoanonline(session('cost_id'));
            return redirect($url)->with('success', 'Đã thanh toán phí dịch vụ');
        }
        session()->forget('url_prev');
        return redirect($url)->with('errors', 'Lỗi trong quá trình thanh toán phí dịch vụ');
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
