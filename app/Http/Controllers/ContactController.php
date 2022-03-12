<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Offer;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\User;

class ContactController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $count_total = 0;
        if(Auth::id())
    {
        $id = Auth::id();
        // $datas = User::where('user_id',$id)->join('carts','users.id','=','carts.user_id')->get();
        // $phone = $datas->phone;

        $cart = Cart::all();

        foreach($cart as $cart)
        {
            if($cart->user_id == $id)
            {
                $count_total = $count_total+1;
            }
            else
            {
                $count_total = $count_total +0;
            }
        }
    }
        return view('user.contact.contact',[
            'count_total' => $count_total,
        ]);
    }

    public function home()
    {
        $products = Product::all();
        $count_total = 0;

    if(Auth::id())
    {
        $id = Auth::id();
        // $datas = User::where('user_id',$id)->join('carts','users.id','=','carts.user_id')->get();
        // $phone = $datas->phone;

        $cart = Cart::all();

        foreach($cart as $cart)
        {
            if($cart->user_id == $id)
            {
                $count_total = $count_total+1;
            }
            else
            {
                $count_total = $count_total +0;
            }
        }
    }



        return view('user.home.home',[
            'products' => $products,
            'count_total' => $count_total,
        ]);
    }

    public function about()
    {
        $count_total = 0;
        if(Auth::id())
    {
        $id = Auth::id();
        // $datas = User::where('user_id',$id)->join('carts','users.id','=','carts.user_id')->get();
        // $phone = $datas->phone;

        $cart = Cart::all();

        foreach($cart as $cart)
        {
            if($cart->user_id == $id)
            {
                $count_total = $count_total+1;
            }
            else
            {
                $count_total = $count_total +0;
            }
        }
    }

        return view('user.about.about',[
            'count_total' => $count_total,
        ]);
    }

    public function offer()
    {
        $products = Offer::all();

        $count_total = 0;
        if(Auth::id())
    {
        $id = Auth::id();
        // $datas = User::where('user_id',$id)->join('carts','users.id','=','carts.user_id')->get();
        // $phone = $datas->phone;

        $cart = Cart::all();

        foreach($cart as $cart)
        {
            if($cart->user_id == $id)
            {
                $count_total = $count_total+1;
            }
            else
            {
                $count_total = $count_total +0;
            }
        }
    }

        return view('user.offer.offer',[
            'products' => $products,
            'count_total' => $count_total,
        ]);

        // return view('user.offer.offer',[
        //     'count_total' => '0',
        // ]);
    }

}
