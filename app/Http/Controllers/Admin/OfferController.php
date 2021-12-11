<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Offer;

class OfferController extends Controller
{
    public function addOffer()
    {
        return view('admin.offer.addoffer');
    }

    public function saveProductOffer(Request $request)
    {
        $this->validate($request,[
            'product_image' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
            'product_offer_price' => 'required',
        ]);

        $product = new Offer();

        // $product->product_image = $request->product_image;

        $product_image = $request->file('product_image');


        // return $product_image;


        $imageName = $product_image->getClientOriginalName();

        $directory = 'admins/product-images/';
        $imageUrl = $directory.$imageName;
        $product_image->move($directory,$imageName);

        $product->product_image=$imageUrl;

        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price;
        $product->product_offer_price = $request->product_offer_price;
        $product->save();

            return redirect()->back()->with('success','Offer Product Added Successfully');
    }

    public function manageOffer()
    {

    }
}
