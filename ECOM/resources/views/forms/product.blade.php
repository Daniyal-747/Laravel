<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="mx-auto text-center bg-dark text-white">All Products Data</h1>
            <h1><a href="{{route('product.create')}}" class="btn btn-success">Add Product</a></h1>
            <div class="col-lg-8 mx-auto text-center">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Product Quantity</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $pro)
                      <tr>
                        <td scope="row">{{$pro->id}}</td>
                        <td>{{$pro->name}}</td>
                        <td>{{$pro->price}}</td>
                        <td>{{$pro->quantity}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</body>
</html>