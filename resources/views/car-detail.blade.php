<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="text-center" style="color:red;">Chi tiet xe</h3>
        <div class="detail d-flex mt-4">
            <div class="image">
                <img src="{{ $car->image }}" alt="Image" width="600" height="400">
            </div>
            <div class="product-detail">
                <ul class="list-group p-3">
                    <li class="list-group-item active">ID: {{ $car->id }}</li>
                    <li class="list-group-item">Description: {{ $car->description }}</li>
                    <li class="list-group-item">Model: {{ $car->model }}</li>
                    <li class="list-group-item">Produce_on: {{ $car->produce_on }}</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>