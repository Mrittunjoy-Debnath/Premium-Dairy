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
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead class="bg-success">
                                            <tr>
                                                <th class="fs-5">SL NO</th>
                                                <th class="fs-5 font-weight-bold">Image</th>
                                                <th class="fs-5 font-weight-bold">Product Name</th>
                                                <th class="fs-5 font-weight-bold">Product Description</th>
                                                <th class="fs-5 font-weight-bold">Product Price</th>
                                                <th class="fs-5 font-weight-bold">Date</th>
                                                <th class="fs-5 font-weight-bold">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($i=1)
                                            @foreach($products as $product)
                                            <tr>

                                                <td>{{$i++}}</td>

                                                <td><img src="{{ asset($product->product_image) }}" class="card-img-top" alt="..." style="height: 100px; width:150px;"></td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->product_description}}</td>
                                                <td>{{$product->product_price}}</td>
                                                <td>{{$product->created_at}}</td>
                                                <td>

                                                <form method="POST" action="{{ route('product-destroy',$product->id) }}">
                                                    <!-- <a href="#" class="btn btn-success">
                                                        <span><i class="fa fa-edit"></i></span>
                                                    </a> -->
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <!-- <a href="" class="btn btn-danger">
                                                        <span><i class="fa fa-trash"></i></span>
                                                    </a> -->
                                                    <input type="submit" class="btn btn-danger delete-user" value="Del">
                                                </form>

                                                <a href="{{ route('edit-product',$product->id) }}" class="btn btn-success">
                                                    Edit
                                                </a>

                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot class="bg-success">
                                            <tr>
                                                <th class="font-weight-bold">SL NO</th>
                                                <th class="font-weight-bold">Image</th>
                                                <th class="font-weight-bold">Product Name</th>
                                                <th class="font-weight-bold">Product Description</th>
                                                <th class="font-weight-bold">Product Price</th>
                                                <th class="font-weight-bold">Date</th>
                                                <th class="font-weight-bold">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
</div>
</div>
</div>

@endsection
