@extends('user.master')

@section('body')
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card mt-4" style="">
                <div class="card-title">
                    <h2 class="bg-success text-white text-center fw-bold">Order Successful</h2>
                </div>
                <div class="card-body">

                    <h4>Thanks for your Order</h4>
                    <p class="mt-4">We call you within 30 minutes</p>
                    <p class="">You will get Product Tomorrow</p>
                    <a class="btn btn-outline-success" href="{{ route('home') }}">Go Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
