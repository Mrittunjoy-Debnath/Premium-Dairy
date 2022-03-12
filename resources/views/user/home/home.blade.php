@extends('user.master')

@section('body')

@include('user.includes.header')

<div class="container-fluid" >

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "263924588815819");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


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

            {{-- <form action="{{route('product-desc',$product->id)}}" method="post">
            @csrf --}}

            <div class="card mx-2 mt-3" >
                <img src="{{ asset($product->product_image) }}" class="card-img-top" alt="..." style="height: 200px;">
                <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <p class="card-text">{{ $product->product_description }}</p>
                <p class="card-text">{{ $product->product_price }}</p>
                <a href="{{ route('product-desc',['id'=>$product->id,'count_total'=>$count_total]) }}" class="btn btn-success ">Buy to click</a>
                {{-- <input type="integer" name="quantity" min="1" value="1" style="width: 80px">
                <input type="submit" value="add cart" >
                <br>
                <span class="text-danger"> {{$errors->has('quantity') ? $errors->first('quantity'):''}} </span> --}}

                </div>
            </div>
            </form>
        </div>
        @endforeach
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
