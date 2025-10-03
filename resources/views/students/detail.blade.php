<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Student List</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Student Detail</h2>
                </div>
                <div class="col text-end">
                    <a href="{{ route("students.index")}}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p><strong>ID: </strong>{{$student->id}}</p>
            <p><strong>Name: </strong>{{$student->name}}</p>
            <p><strong>Age: </strong>{{$student->age}}</p>
            <p><strong>Gender: </strong>{{$student->gender}}</p>
            <p><strong>Email: </strong>{{$student->email}}</p>
        </div>
    </div>
</body>
</html>