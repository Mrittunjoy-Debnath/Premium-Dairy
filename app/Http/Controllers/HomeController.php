<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\User;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function adminIndex()
    {

        $total_user = User::count();
        $total_product = Product::count();

        $product_orders = Order::count();

        $orders = Order::all();
        $num=0;
        $count_order=0;
        foreach($orders as $data)
        {
            if($data->phone==$num)
            {
                $count_order = $count_order+0;

            }
            else
            {
                $count_order = $count_order+1;
                $num = $data->phone;
            }
        }


        return view('admin.home.home',[
            'total_user' => $total_user,
            'total_product' => $total_product,
            'product_orders' => $product_orders,
            'count_order' => $count_order,
        ]);
    }

    public function ckeditor()
    {
        return view('admin.editor.ckeditor');
    }


}
