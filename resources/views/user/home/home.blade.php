@extends('user.master')

@section('body')

@include('user.includes.header')

<div class="container-fluid">
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
        @php($i=1)
        @foreach($products as $product)

        <div class="col-md-4">

            <form action="{{route('add-cart',$product->id)}}" method="post">
            @csrf

            <div class="card mx-2 mt-3" >
                <img src="{{ asset($product->product_image) }}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_description }}</p>
                <p class="card-text">{{ $product->product_price }}</p>
                {{-- <a href="#" class="btn btn-success">Go somewhere</a> --}}
                <input type="integer" name="quantity" min="1" value="1" style="width: 80px">
                <input type="submit" value="add cart">
                <br>
                <span class="text-danger"> {{$errors->has('quantity') ? $errors->first('quantity'):''}} </span>

                </div>
            </div>
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
