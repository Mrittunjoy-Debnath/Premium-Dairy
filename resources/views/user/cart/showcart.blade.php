@extends('user.master')

@section('body')
    <div class="container">

        <form class="form-horizontal" action="{{ route('order-confirm') }}" method="post" >
            @csrf
        <div class="row mt-5">
            <div class="col-md-6" style="margin:0px;padding:0px;">
                <table class="bg-success" align="right">

                    <tr align="center">
                        <th style="padding: 30px;">Product Name</th>
                        <th style="padding: 30px;">Price</th>
                        <th style="padding: 30px;">Quantity</th>
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

                    @foreach($datas as $datas)
                    <tr align="center">
                        <td>
                            <input type="text" name="product_name[]" value="{{ $datas->product_name }}" hidden="" >
                            {{ $datas->product_name }}
                        </td>
                        <td>
                            <input type="integer" name="product_price[]" value="{{ $datas->product_price }}" hidden="" >
                            {{ $datas->product_price }}
                        </td>
                        <td>
                            <input type="integer" name="quantity[]" value="{{ $datas->quantity }}" hidden="" >
                            {{ $datas->quantity }}
                        </td>
                        {{--  <td><a href="{{ route('remove',$data2->id) }}" class="btn btn-warning">Remove</td>  --}}
                    </tr>
                    @endforeach

                </table>
            </div>

            <div class="col-md-6" style="margin:0px;padding:0px;">
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

            <div align="center" style="padding: 5px;" class="d-grid col-md-3 offset-4 ">
                <button align="right" class="btn btn-primary" type="button" id="orderId">Order Now</button>
            </div>

            <div class="card col-md-6 offset-2" align="end">

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
