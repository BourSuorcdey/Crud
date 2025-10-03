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
                    <h2>Student list</h2>
                </div>
                <div class="col text-end">
                    <a href="{{ route("students.create")}}" class="btn btn-success">Add Student</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @session('success')
            <div class="alert alert-success">{{$value}}</div>
            @endsession
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->age}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->email}}</td>
                            <td>
                                <a href="{{route("students.detail", $student->id)}}" class="btn btn-info ">Detail</a>
                                <a href="{{route("students.edit", $student->id)}}" class="btn btn-primary ">update</a>
                                <a href="{{route("students.delete", $student->id)}}" class="btn btn-danger" 
                                    onclick="return confirm('Delete this student?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$students->links()}}
        </div>
        </div>
    </div>
</body>
</html>