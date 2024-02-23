<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <div class="container">
        <h2 style="color:red; text-align:center">Danh sach xe</h2>
            <table class="table table-warning table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Produce_on</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->make }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->produce_on}}</td>
                        <td>
                            {{-- <a name="" id="" class="btn btn-primary" href="/car/{{$car->id}}" role="button">Chi tiet</a> --}}
                            {{-- <a name="" id="" class="btn btn-primary" href="{{route('car.detail',$car->id)}}" role="button">Update</a> --}}
                            {{-- <a name="" id="" class="btn btn-primary" href="{{ action([App\Http\Controllers\CarController::class, 'show'], ['id'=> $car->id])}}" role="button">Detail</a> --}}
                            <a name="" id="" class="btn btn-primary" href="{{ action([App\Http\Controllers\CarController::class, 'show'], ['car'=> $car->id])}}" role="button">Detail</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>