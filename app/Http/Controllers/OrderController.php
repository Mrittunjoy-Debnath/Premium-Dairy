<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function orderConfirm(Request $request)
    {
        $this->validate($request,[
            'product_name' => 'required',
            'product_price' => 'required',
            'quantity' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        foreach($request->product_name as $key => $product_name)
        {
            $data = new order;
            $data->product_name = $request->product_name[$key];
            $data->product_price = $request->product_price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }

        return redirect()->back();

    }
}
