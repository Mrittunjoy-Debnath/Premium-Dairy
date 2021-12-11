<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use App\Ordermove;


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

        $grand_total=0;

        foreach($data as $data2)
        {
            $name = $data2->name;
            $address = $data2->address;
            if($grand_total==$data2->total_bill)
            {
                $grand_total = $data2->total_bill;
            }
            else
            {
                $grand_total += $data2->total_bill;
            }

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
    public function orderMove($phone)
    {
        $data = Order::where('phone','=',$phone)
        ->get();


        foreach($data as $data)
        {
            $order = new Ordermove();
            $order->product_name = $data->product_name;
            $order->product_price = $data->product_price;
            $order->quantity = $data->quantity;
            $order->total_bill = $data->total_bill;
            $order->total_qty = $data->total_qty;
            $order->name  = $data->name;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->save();

            $data->delete();
        }

        return redirect()->back()->with('success','Order Done Successfully');
    }

    public function doneOrder()
    {
        $data = Ordermove::all();

        return view('admin.orders.ordermove',[
            'data' =>$data,
        ]);
    }

    public function orderMoveDone($phone)
    {

        $data = Ordermove::where('phone','=',$phone)
        ->get();

        foreach($data as $data2)
        {
            $name = $data2->name;
            $address = $data2->address;
            $grand_total = $data2->total_bill;
        }

        return view('admin.orders.ordermovedone',[
            'data' => $data,
            'name' => $name,
            'phone'=>$phone,
            'address' =>$address,
            'grand_total' =>$grand_total,
        ]);
    }

    public function orderMoveDelete($phone)
    {
        $data = Ordermove::where('phone','=',$phone)
        ->get();


        foreach($data as $data)
        {
            $data->delete();
        }

        return redirect()->back()->with('success','Deleted Successfully');
    }

}
