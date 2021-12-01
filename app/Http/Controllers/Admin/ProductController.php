<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.addproduct');
    }

    public function saveProduct(Request $request)
    {
        $this->validate($request,[
            'product_image' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
        ]);

        $product = new Product();

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

        $product->save();

            return redirect("/admin/addproduct")->with('success','Product Added Successfully');


        // return view('admin.product.addproduct');
    }

    public function manageProduct()
    {
        $products = Product::all();
        return view('admin.product.manageproduct',[
            'products'=>$products
        ]);
    }

    public function productDestroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        // $products = Product::all();

        // return view('admin.product.manageproduct',[
        //     'products'=>$products
        // ]);

        return redirect()->route('manage-product')->with('success','Product Delete Successfully');
    }

    public function editProduct($id)
    {
        $products = Product::find($id);

        return view('admin.product.editproduct',[
            'products'=>$products
        ]);
    }

    public function updateProduct(Request $request,$id)
    {
        $this->validate($request,[
            'product_image' => 'required',
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required',
        ]);

        $product = Product::find($id);

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

        $product->save();

        return redirect("/admin/manageproduct")->with('success','Product Updated Successfully');
    }
}
