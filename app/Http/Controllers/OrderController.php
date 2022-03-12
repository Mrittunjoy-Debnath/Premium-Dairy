<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\DB;
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
            $data->total_bill = $request->total_bill;
            $data->total_qty = $request->total_qty;
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
        }

        $user_id = $request->user_id;

        $count_total = Cart::where('user_id',$user_id)->count();

        Cart::where('user_id', $user_id)->delete();
        // for($i=0;$i<$count_total;$i++)
        // {
        //             DB::table('cart')
        //                 ->where('user_id', $user_id)
        //                 ->delete();
        // }
        // $data = Cart::find($user_id);
        // $data->delete();
        // $data2 = Cart::select('*')->where('user_id', '=', $user_id)->get();
        // $data2->delete();
        // DB::table('cart')
        // ->where('user_id', $user_id)
        // ->delete();

        return view('user.order.orderconfirm',[
            'count_total' => '0',
        ]);

    }

    //product desc

    public function productDesc($id,$count_total)
    {
        $products = Product::find($id);
        // $count_total = Cart::where('user_id',$id)->count();
        // dd($count_total);
        return view('user.home.productdesc',[
            'product' => $products,
            'count_total' => $count_total,
        ]);
    }
}
