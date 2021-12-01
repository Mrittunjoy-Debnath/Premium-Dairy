<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function showOrders()
    {
        $data = Order::all();

        return view('admin.orders.orders',[
            'data' =>$data,
        ]);
    }
}
