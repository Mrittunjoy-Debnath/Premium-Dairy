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
                            {{-- <div class="card-body"> --}}
                                <h4 class="card-title text-center p-2 bg-success">Orders Product</h4>

                                <form action="{{ route('search') }}" method="post">
                                    @csrf

                                    <input type="text" name="search" style="color: blue;" placeholder="name">
                                    <input type="submit" value="submit" class="btn btn-success">
                                </form>
                                <table>
                                    <thead>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>FoodName</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </thead>
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->product_name }}</td>
                                        <td>{{ $data->product_price }}$</td>
                                        <td>{{ $data->quantity }}</td>
                                        <td>{{ $data->product_price * $data->quantity }}$</td>
                                    </tr>
                                    @endforeach
                                </table>


                            {{-- </div> --}}
                        </div>
        </div>
    </div>
</div>
@endsection
