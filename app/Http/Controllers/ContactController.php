<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Offer;
class ContactController extends Controller
{
    public function index()
    {
        return view('user.contact.contact',[
            'count_total' => '0',
        ]);
    }

    public function home()
    {
        $products = Product::all();

        return view('user.home.home',[
            'products' => $products,
            'count_total' => '0',
        ]);
    }

    public function about()
    {
        return view('user.about.about',[
            'count_total' => '0',
        ]);
    }

    public function offer()
    {
        $products = Offer::all();

        return view('user.offer.offer',[
            'products' => $products,
            'count_total' => '0',
        ]);

        // return view('user.offer.offer',[
        //     'count_total' => '0',
        // ]);
    }

}
