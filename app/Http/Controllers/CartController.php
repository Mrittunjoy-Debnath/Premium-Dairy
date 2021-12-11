<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Cart;
use App\Product;
use App\Offer;

class CartController extends Controller
{
    public function addCart(Request $request,$id)
    {
        $this->validate($request,[
            'quantity' => 'required',
        ]);

        $user_id = Auth::id();
        $product_id = $id;
        $quantity = $request->quantity;

        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->product_id = $product_id;
        $cart->quantity = $quantity;
        $cart->save();

        $products = Product::all();
        $count_total = Cart::where('user_id',$user_id)->count();

        return view('user.home.home',[
            'products' => $products,
            'count_total' => $count_total,
        ]);

        // return view('user.includes.navbar',[
        //     'products' => $products,
        //     'count_total' => $count_total,
        // ]);

//         return  view()->composer(['user.home.home', 'user.includes.navbar'], function ($view) {
//             $count = Cart::where('user_id',$user_id)->count();
//             // $someVar = 'some var value';
//             $view->with(['count' => $count]);
// });

        // dd($count);
        // return redirect()->back();
    }

    //offer
//     public function addOfferCart(Request $request,$id)
//     {
//         $this->validate($request,[
//             'quantity' => 'required',
//         ]);

//         $user_id = Auth::id();
//         $product_id = $id;
//         $quantity = $request->quantity;

//         $cart = new Cart();
//         $cart->user_id = $user_id;
//         $cart->product_id = $product_id;
//         $cart->quantity = $quantity;
//         $cart->save();

//         $products = Offer::all();
//         $count_total = Cart::where('user_id',$user_id)->count();

//         return view('user.offer.offer',[
//             'products' => $products,
//             'count_total' => $count_total,
//         ]);

//         // return view('user.includes.navbar',[
//         //     'products' => $products,
//         //     'count_total' => $count_total,
//         // ]);

// //         return  view()->composer(['user.home.home', 'user.includes.navbar'], function ($view) {
// //             $count = Cart::where('user_id',$user_id)->count();
// //             // $someVar = 'some var value';
// //             $view->with(['count' => $count]);
// // });

//         // dd($count);
//         // return redirect()->back();
//     }

    //offer
    public function showCart($id)
    {
        if(Auth::id()==$id)
        {
            $count_total = Cart::where('user_id',$id)->count();

            $data2 = Cart::select('*')->where('user_id', '=', $id)->get();

            $datas = Cart::where('user_id',$id)->join('products','carts.product_id','=','products.id')->get();
            return view('user.cart.showcart',[
                'count_total' =>$count_total,
                'datas' => $datas,
                'data2' =>$data2,
                'user_id' => $id,
            ]);
        }
        else
        {
            return redirect()->back();
        }
    }

    public function removeCart($id)
    {
        $data = Cart::find($id);
        $data->delete();

        return redirect()->back();
    }
}
