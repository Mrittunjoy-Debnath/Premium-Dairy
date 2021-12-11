<navbar class="">
  <div class="container">
        <div class="row" style="font-family: 'Poppins', 'sans-serif'; ">
            <div class="col-md-6 col-sm-5 rnav" >
                <p class="text-success">covid-19 response "stay home, stay safe"</p>
            </div>
            {{-- <div class="col-md-4">
                How
            </div> --}}
            <div class="col-md-6 col-sm-7 text-success text-end rnav">
                <i class="far fa-envelope"></i> contact@premiumdairybd.com | <i class="fas fa-phone"></i> +8801747630403
            </div>
        </div>
  </div>
    <div class="container-fluid sticky-top">

        <div class="row">
            <div class="col-md-12 col-sm-12 rnav" id="fixedbar">
                <nav class="navbar navbar-expand-lg navbar-light bg-success " id="fixednav">
                    <div class="container-fluid">
                        {{-- <div class="row"> --}}
                            @auth
                      <a class="navbar-brand text-white fw-bold" href="#">{{ Auth::user()->name }}</a>
                    @endauth

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                      <div class="collapse navbar-collapse active" id="navbarToggleExternalContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 group" >
                          <li class="nav-item ">
                            <a class="nav-link text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('about') }}">About Us</a>
                          </li>
                          {{-- <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('offer') }}">Offers</a>
                          </li> --}}
                          <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('contact') }}">Contact</a>
                          </li>



                          {{--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </li>  --}}


                        </ul>
                        <ul class="navbar-nav mb-2 mb-lg-0">

                            {{-- @auth
                                <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('show-cart',Auth::user()->id) }}">Cart[ {{ $count_total }} ]</a>
                                </li>
                            @endauth

                            @guest
                                <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('login') }}">Cart[ 0 ]</a>
                              </li>
                            @endguest --}}


                            @if(Auth::user())

                                <li class="nav-item bg-danger">
                                    <a id="cartId" onmouseover="see(this)"  class="nav-link text-white" href="{{ route('show-cart',Auth::user()->id) }}"><i class="fas fa-shopping-cart">Cart[ {{ $count_total }} ]</i></a>
                                </li>

                                <li class="nav-item ">
                                <a class="nav-link text-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                                </li>
                            @else

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">Cart[ 0 ]</a>
                                </li>

                                <li class="nav-item ">
                                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" >/</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link text-white " href="{{ route('register') }}">Register</a>
                                </li>

                            @endif
                        </ul>
                      </div>
                        {{-- </div> --}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</navbar>
