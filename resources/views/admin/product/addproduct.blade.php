@extends('admin.app')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="font-weight-bold m-1">{{$message}}</p>
                </div>
            @endif
        </div>
    <div class="col-md-12">
        <div class="card">
                            {{-- <div class="card-body"> --}}
                                <h4 class="card-title text-center p-2 bg-success">Add Product</h4>


                                <form class="form-horizontal" action="{{ route('save-product') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Upload Image</lebel>

                                            <div class="col-sm-7">
                                                <input type="file" name="product_image" class="form-control">
                                                <span class="text-danger"> {{$errors->has('product_image') ? $errors->first('product_image'):''}} </span>
                                            </div>

                                        </div>


                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Product Name</lebel>

                                            <div class="col-sm-7">
                                                <input type="string" name="product_name" class="form-control" placeholder="Enter Product Name">
                                                <span class="text-danger"> {{$errors->has('product_name') ? $errors->first('product_name'):''}} </span>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Product Description</lebel>
                                            <div class="col-sm-7" >
                                                <input type="string" name="product_description" class="form-control"  placeholder="Enter Product Description">
                                                <span class="text-danger"> {{$errors->has('product_description') ? $errors->first('product_description'):''}} </span>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <lebel class="col-sm-3 text-right control-lebel col-form-lebel">Product Price</lebel>
                                            <div class="col-sm-7" >
                                                <input type="integer" name="product_price" class="form-control"  placeholder="Enter Product Price">
                                                <span class="text-danger"> {{$errors->has('product_price') ? $errors->first('product_price'):''}} </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-top">
                                        <div class="card-body">
                                            <button type="submit" name="btn" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>
                                </form>

                            {{-- </div> --}}
                        </div>
        </div>
    </div>
</div>

@endsection
