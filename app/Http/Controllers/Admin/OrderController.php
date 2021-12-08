<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Barryvdh\DomPDF\Facade as PDF;


class OrderController extends Controller
{
    public function showOrders()
    {
        $data = Order::all();

        return view('admin.orders.orders',[
            'data' =>$data,
        ]);
    }

    public function orderDone($phone)
    {

        $data = Order::where('phone','=',$phone)
        ->get();

        foreach($data as $data2)
        {
            $name = $data2->name;
            $address = $data2->address;
            $grand_total = $data2->total_bill;
        }

        return view('admin.orders.orderdone',[
            'data' => $data,
            'name' => $name,
            'phone'=>$phone,
            'address' =>$address,
            'grand_total' =>$grand_total,
        ]);
    }

    public function downloadPdf($phone)
    {
        $data = Order::where('phone','=',$phone)
        ->get();

        foreach($data as $data2)
        {
            $name = $data2->name;
            $address = $data2->address;
            $grand_total = $data2->total_bill;
        }

        $pdf = PDF::loadView('admin.orders.orderdownload',[
            'data'=>$data,
            'name' => $name,
            'phone'=>$phone,
            'address' =>$address,
            'grand_total' =>$grand_total,
        ]);
        return $pdf->download('invoice.pdf');

    }


}
