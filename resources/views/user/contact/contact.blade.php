@extends('user.master')

@section('body')
    <div class="container">
        <div class="row ">
            <hr class="mt-5">
            <div class="col-md-12">  <h2 class="text-center ">  Get In Touch </h2>  </div>
            <hr>

            <p class="text-center">Want to get in touch? We’d love to hear from you. Here’s how you can reach us…</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/cellphone.png') }}" class="rounded mx-auto d-block" >
                <h4 class="text-center text-success">Talk to sales</h4>
                <p class="text-center">Interested in our products? Just pick up the phone and call us.</p>
                <div class="text-center">
                    <a href="tel:+8801973524035" target="_self" class="btn btn-success">
                        <span class="text-center">+880 1973 524035</span>
                      </a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/email.png') }}" class="rounded mx-auto d-block" >
                <h4 class="text-center text-success">Contact support</h4>
                <p class="text-center">Interested in our products? Just pick up the phone and call us.</p>
                <div class="text-center">
                    <a href="tel:+8801973524035" target="_self" class="btn btn-success">
                        <span class="text-center">+880 1973 524035</span>
                      </a>
                </div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('img/location.png') }}" class="rounded mx-auto d-block" >
                <h4 class="text-center text-success">Head Office</h4>
                <p class="text-center">If you need a little help. Don’t worry, We’re here for you.</p>
                <div class="text-center">
                    <a href="tel:+8801973524035" target="_self" class="btn btn-success">
                        <span class="text-center">+880 1973 524035</span>
                      </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <hr>
            <h2 class="text-success text-center">We Love to here from you</h2>
            <hr>

            <p class="text-center">Want to get in touch? We’d love to hear from you. Here’s how you can reach us…</p>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div class="card">
                    <h2 class="text-center text-success">Submit Your Opinion</h2>
                <form class="form-horizontal" action="{{ route('feedback') }}" method="post">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                                <div class="col-sm-12">
                                    <input type="string" name="customer_name" class="form-control" placeholder="Your Name (required)">
                                    <span class="text-danger"> {{$errors->has('customer_name') ? $errors->first('customer_name'):''}} </span>
                                </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-sm-12">
                                <input type="email" name="customer_email" class="form-control" placeholder="Your Email (required)">
                                <span class="text-danger"> {{$errors->has('customer_email') ? $errors->first('customer_email'):''}} </span>
                            </div>
                        </div>
                        <div class="form-group row mt-2">
                            <div class="col-sm-12">
                                <input type="string" name="customer_subject" class="form-control" placeholder="Your Subject (required)">
                                <span class="text-danger"> {{$errors->has('customer_subject') ? $errors->first('customer_subject'):''}} </span>
                            </div>
                        </div>

                        <div class="form-group row mt-2">
                            <div class="col-sm-12">
                                <textarea name="customer_feedback" class="form-control" placeholder="Your Feedback (required)" rows="5"></textarea>
                                <span class="text-danger"> {{$errors->has('customer_feedback') ? $errors->first('customer_feedback'):''}} </span>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success mt-2" value="SEND">
                    </div>
                </form>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14599.686912649557!2d90.42323288491633!3d23.821382207803396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c64c103a8093%3A0xd660a4f50365294a!2z4Kao4Kaw4KeN4KalIOCmuOCmvuCmieCmpSDgpofgpongpqjgpr_gpq3gpr7gprDgp43gprjgpr_gpp_gpr8!5e0!3m2!1sbn!2sbd!4v1633836580580!5m2!1sbn!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
@endsection
