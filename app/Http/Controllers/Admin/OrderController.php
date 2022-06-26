<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Order;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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

    // Tổng doanh thu
    public function totalRevenueDaily()
    {
        $date = Carbon::now()->subDays(60)->startOfDay();
    return DB::table('orders')
    ->where('orders.created_at', '>=', $date)
    ->where('orders.status', '=', '1')
    ->groupBy(DB::raw('DATE(orders.created_at)'))
    ->orderBy('created_at', 'desc')
    ->select(
        DB::raw('DATE(orders.created_at) as date'),
        DB::raw('SUM(orders.amount) as revenue'),
        DB::raw('SUM(orders.status) as orders')
    )->get();
    }

    public function totalRevenueWeekly()
    {
        $week = Carbon::now()->subWeeks(30)->startOfWeek();
    return DB::table('orders')
    ->where('orders.status', '=', '1')
    ->where('orders.created_at', '>=', $week)
    ->groupBy(DB::raw('WEEK(orders.created_at)'))
    ->orderBy('created_at', 'desc')
    ->select(
        DB::raw('WEEK(orders.created_at) as week'),
        DB::raw('SUM(orders.amount) as revenue'),
        DB::raw('SUM(orders.status) as orders')
    )->get();
    }

    public function totalRevenueMonthly()
    {
        $month = Carbon::now()->subMonths(11)->startOfMonth();
    return DB::table('orders')
    ->where('orders.created_at', '>=', $month)
    ->where('orders.status', '=', '1')
    ->groupBy(DB::raw('MONTH(orders.created_at)'))
    ->orderBy('created_at', 'desc')
    ->select(
        DB::raw('MONTH(orders.created_at) as month'),
        DB::raw('SUM(orders.amount) as revenue'),
        DB::raw('SUM(orders.status) as orders')
    )->get();
    }

    public function totalRevenueYearly()
    {
    return DB::table('orders')
    ->where('orders.status', '=', '1')
    ->groupBy(DB::raw('YEAR(orders.created_at)'))
    ->orderBy('created_at', 'desc')
    ->select(
        DB::raw('YEAR(orders.created_at) as year'),
        DB::raw('SUM(orders.amount) as revenue'),
        DB::raw('SUM(orders.status) as orders')
    )->get();

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
