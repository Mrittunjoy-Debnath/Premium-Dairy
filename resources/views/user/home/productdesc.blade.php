@extends('user.master')

@section('body')



<div class="container-fluid" >
    <div class="row">
        <hr>
        <div class="col-md-4 mx-auto">

        {{--  @if($count_total>0)
        <h4 class="text-center">Count : {{  $count_total }}</h4>
        @else
        <h4 class="text-center">Count : 0</h4>
        @endif  --}}

        {{--  <h4 class="text-center">Count :{{  $count_total }}</h4>  --}}

        <h3 class="mx-2 p-1 text-center text-white bg-success fw-bold">Premium Products</h3>
        </div>
        <hr>
        {{-- @php($i=1)
        @foreach($products as $product) --}}

        <div class="col-md-7 mx-auto">
            <div class="card mb-3" >
                <div class="row g-0">
                  <div class="col-md-5">
                    <img src="{{ asset($product->product_image) }}" class="img-fluid rounded-start img-thumbnail" alt="..." style="height: 300px; " >
                  </div>
                  <div class="col-md-7">
                    <form action="{{route('add-cart',$product->id)}}" method="post">
                        @csrf
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->product_name }}</h5>
                        <p class="card-text">{{ $product->product_description }}</p>
                        <p class="card-text">{{ $product->product_price }}</p>
                        {{-- <a href="#" class="btn btn-success">Go somewhere</a> --}}
                        <input type="integer" name="quantity" min="1" value="1" style="width: 80px">
                        <input type="submit" value="add cart" >
                        <br>
                        <span class="text-danger"> {{$errors->has('quantity') ? $errors->first('quantity'):''}} </span>

                    </div>
                    </form>
                  </div>

                </div>
              </div>
        </div>







{{-- <div class="row">
    <div class="col-md-8 mx-auto">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset($product->product_image) }}" class="card-img-top" alt="..." style="height: 200px;">
            </div>
            <div class="col-md-6">

                <form action="{{route('add-cart',$product->id)}}" method="post">
                @csrf

                <div class="card mx-2 mt-3" >

                    <div class="card-body">
                    <h5 class="card-title">{{ $product->product_name }}</h5>
                    <p class="card-text">{{ $product->product_description }}</p>
                    <p class="card-text">{{ $product->product_price }}</p>
                    <a href="#" class="btn btn-success">Go somewhere</a>
                    <input type="integer" name="quantity" min="1" value="1" style="width: 80px">
                    <input type="submit" value="add cart" >
                    <br>
                    <span class="text-danger"> {{$errors->has('quantity') ? $errors->first('quantity'):''}} </span>

                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

        {{-- @endforeach --}}
    </div>

    <div class="position-fixed top-0 end-0 p-3" style="z-index: 11; margin-top:80px; margin-right:40px;">
        <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <img src="{{ asset('img/1.jpg') }}" class="rounded me-2" alt="..." height="50px" width="50px">
                <strong class="me-auto">Premium Dairy</strong>

                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>

            <div class="toast-body">

            @auth
                <a class="btn btn-block bg-success text-white" href="{{ route('show-cart',Auth::user()->id) }}">View Cart</a>
                <a class="btn btn-block bg-success text-white" href="{{ route('show-cart',Auth::user()->id) }}">Check Out</a>
            </div>
            @endauth
        </div>
    </div>

</div>
@endsection
