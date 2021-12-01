@extends('user.master')

@section('body')
    <div class="card">
        <div class="card-body m-auto">
          <h5 class="card-title text-success">FeedBack Added Successfully Successful</h5>
          <div class="row">
            <p class="text-info">Thanks for Your Suggesstion.</p>
            <p class="text-info">We Consider your Suggesstion</p>
            <a href="{{ route('home') }}" class="btn btn-success">Go Home <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
@endsection
