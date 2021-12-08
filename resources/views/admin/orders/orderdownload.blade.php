<!DOCTYPE html>

<html>

<head>

    <title>Hi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                @php($i=1)
    {{--  <table
    class="table table-striped table-bordered">
        <thead >
            <tr>
            <th class="fw-bold">SL NO.</th>
            <th class="fw-bold">Name</th>
            <th class="fw-bold">Phone</th>
            <th class="fw-bold">Address</th>
            <th class="fw-bold">FoodName</th>
            <th class="fw-bold">Price</th>
            <th class="fw-bold">Quantity</th>
            <th class="fw-bold">Total Price</th>
            <th class="fw-bold">Grand Total</th>
            </tr>
        </thead>
        @foreach($data as $data)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->phone }}</td>
            <td>{{ $data->address }}</td>
            <td>{{ $data->product_name }}</td>
            <td>{{ $data->product_price }}$</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->product_price * $data->quantity }}$</td>
            <td>{{ $data->total_bill }}</td>
        </tr>
        @endforeach
        <tfoot>
            <tr>
            <th class="fw-bold">SL NO.</th>
            <th class="fw-bold">Name</th>
            <th class="fw-bold">Phone</th>
            <th class="fw-bold">Address</th>
            <th class="fw-bold">FoodName</th>
            <th class="fw-bold">Price</th>
            <th class="fw-bold">Quantity</th>
            <th class="fw-bold">Total Price</th>
            <th class="fw-bold">Grand Total</th>
            </tr>
        </tfoot>
    </table>  --}}

    <div class="table-responsive">
        <table id="zero_config"
        class="table table-striped table-bordered">

            <thead class="bg-success">
                <tr>
                    <th colspan="5" class="text-center fw-bolder text-white">Premium Dairy</th>
                </tr>
                <tr>
                <th></th>
                <th class="fw-bold">Name</th>
                <th class="fw-bold">Phone</th>
                <th class="fw-bold">Address</th>
                <th></th>
                </tr>
            </thead>
            <tbody>

            <tr>
                <td></td>
                <td>{{ $name }}</td>
                <td>{{ $phone }}</td>
                <td>{{ $address }}</td>
                <td></td>
            </tr>


            </tbody>
            {{--  <tfoot class="bg-success">
                <th class="fw-bold">Name</th>
                <th class="fw-bold">Phone</th>
                <th class="fw-bold">Address</th>
            </tfoot>  --}}

            <thead class="bg-success">
                <tr>
                <th class="fw-bold">SL NO.</th>
                <th class="fw-bold">FoodName</th>
                <th class="fw-bold">Price</th>
                <th class="fw-bold">Quantity</th>
                <th class="fw-bold">Total Price</th>
                </tr>
            </thead>
            <tbody>
            @php($i=1)
            @foreach($data as $data)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $data->product_name }}</td>
                <td>{{ $data->product_price }}$</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->product_price * $data->quantity }}$</td>

            </tr>
            @endforeach
            <tr>
                <td class="bg-success text-white text-center fw-bold" colspan="4">Total bill: {{ $grand_total }}</td>
                <td class="bg-success"><a class="text-white" href="{{ route('download-pdf',['phone'=>$data->phone]) }}">Download</a></td>
            </tr>
            </tbody>

            {{--  <tfoot class="bg-success">
            <tr>
                <th class="fw-bold">SL NO.</th>
                <th class="fw-bold">FoodName</th>
                <th class="fw-bold">Price</th>
                <th class="fw-bold">Quantity</th>
                <th class="fw-bold">Total Price</th>
            </tr>
            </tfoot>  --}}
        </table>
    </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
