@extends('user.master')

@section('body')
    <div class="container">

        <form class="form-horizontal" action="{{ route('order-confirm') }}" method="post" >
            @csrf
        <div class="row mt-5">
            <div class="col-md-8" style="margin:0px;padding:0px;">
                <table class="bg-success" align="right" >

                    <tr align="center">
                        <th style="padding: 30px;">Serial No.</th>
                        <th style="padding: 30px;">Product Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Quantity</th>
                        <th style="padding: 30px;">Sub total</th>
                        {{--  <th style="padding: 30px;">Action</th>  --}}
                    </tr>

                    {{--  @foreach ($datas as $data)
                    <tr align="center">
                        <td>{{ $data->product_name }}</td>
                        <td>{{ $data->product_price }}</td>
                        <td>{{ $data->quantity }}</td>
                    </tr>
                    @endforeach

                    @foreach ($data2 as $data2)
                    <tr style="position: relative; top:-120px; right:-1000px;">
                        <td><a href="{{ route('remove',$data2->id) }}" class="btn btn-warning">Remove</td>
                    </tr>
                    @endforeach  --}}

                    @php
                        $i = 1;
                        $sum = 0;
                        $total_qty =0;
                    @endphp

                    @foreach($datas as $datas)
                    <tr align="center">
                        <td>
                            {{ $i++ }}
                        </td>
                        <td>
                            <input type="text" name="product_name[]" value="{{ $datas->product_name }}" hidden="" >
                            {{ $datas->product_name }}
                        </td>
                        <td>
                            <input type="integer" name="product_price[]" value="{{ $datas->product_price }}" hidden="" >
                            {{ $datas->product_price }} TK.
                        </td>
                        <td>
                            <input type="integer" name="quantity[]" value="{{ $datas->quantity }}" hidden="" >
                            {{ $quantity1 = $datas->quantity }}
                        </td>

                        <td>
                            <input type="integer" name="total_bill[]" value="{{ $datas->product_price*$datas->quantity }}" hidden="" >
                            {{ $total = $datas->product_price*$datas->quantity }} TK.
                        </td>
                        {{--  <td><a href="{{ route('remove',$data2->id) }}" class="btn btn-warning">Remove</td>  --}}
                    </tr>
                    @php
                        $sum = $sum + $total;
                        $total_qty = $total_qty + $quantity1;
                    @endphp

                    @endforeach

                </table>
                <table class="bg-success mt-1 text-white" align="right">
                    <tr align="center">
                        <td class="fw-bold" style="padding: 15px;"></td>
                        <td class="fw-bold" style="padding: 15px;"></td>
                        <td class="fw-bold" style="padding: 15px;">Total :  {{ $total_qty }} </td>
                        <td class="fw-bold" style="padding: 15px;">Total :  {{ $sum }} TK.</td>
                        <td class="fw-bold" style="padding: 15px;"></td>
                    </tr>
                </table>
                {{-- <h4 class="mx-auto text-center"> Total : {{ $sum }}</h4> --}}
            </div>

            <div class="col-md-4" style="margin:0px;padding:0px;">
                <table class="bg-success" align="left">
                    <tr>
                        <th style="padding: 30px; text-align:left;">Action</th>
                    </tr>
                    @foreach ($data2 as $data2)
                        <tr >
                            <td><a href="{{ route('remove',$data2->id) }}" class="text-dark" style="margin-left: 20px;">Remove</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div align="center" style="padding: 5px;" class="d-grid col-md-4 offset-1">
                <button align="right" class="btn btn-success" type="button" id="orderId">Order Now</button>
            </div>
            <div align="center" style="padding: 5px;" class="d-grid col-md-4">
                <a href="{{ route('home') }}" class="btn btn-outline-success">Continue Shopping</a>
            </div>

            <div class="card col-md-8 offset-1" align="end">

                <div align="center" style="padding: 10px; display:none;" id="appearId" class="card-body">
                    <div style="padding: 10px;" class="form-group row">

                        <lebel class="col-md-3 control-lebel col-form-lebel">Name</lebel>
                        <div class="col-md-9">
                            <input  type="text" name="name" class="form-control" placeholder="Name">
                            <span class="text-danger"> {{$errors->has('name') ? $errors->first('name'):''}} </span>
                        </div>

                    </div>

                    <div style="padding: 10px;" class="form-group row">

                            <label class="col-md-3 control-lebel col-form-lebel">Phone</label>
                            <div class="col-md-9">
                                <input class="form-control " type="text" name="phone" placeholder="Phone Number">
                                <span class="text-danger"> {{$errors->has('phone') ? $errors->first('phone'):''}} </span>
                        </div>
                    </div>

                    <div style="padding: 10px;" class="form-group row">

                            <label class="col-md-3 control-lebel col-form-lebel">Address</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="address" placeholder="Address">
                                <span class="text-danger"> {{$errors->has('address') ? $errors->first('address'):''}} </span>
                        </div>
                    </div>

                    <div style="padding: 10px;" class="form-group row">
                        <div class="col-md-6 d-grid">

                            <input  type="hidden" name="total_bill"  value="{{ $sum }}">
                            <input  type="hidden" name="total_qty"  value="{{ $total_qty }}">
                            <input  type="hidden" name="user_id"  value="{{ $user_id }}">
                            <input class="btn btn-success" type="submit"  value="Order Confirm">
                        </div>
                        <div class="col-md-6 d-grid">
                            <button class="btn btn-danger " type="button" id="closeId">Close</button>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </form>
    </div>

@endsection
