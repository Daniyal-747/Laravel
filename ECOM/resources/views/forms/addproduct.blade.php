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
            <h1 class="bg-dark text-white mx-auto text-center">Add Product</h1>
            <div class="col-lg-6 mx-auto">
                <form method="post" action="{{route('product.store')}}">
                  @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Price">
                      </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Quantity</label>
                      <input type="text" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="Enter Product Quantity">
                    </div>
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</body>
</html>