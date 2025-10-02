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
                    <h2>Update Student</h2>
                </div>
                <div class="col text-end">
                    <a href="{{ route("students.index")}}" class="btn btn-primary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route("students.update", $student->id) }}", method="POST">
            
                @csrf
                <div class="mt-2 row">
                    <div class="col">
                        <label for="name">Name: </label>
                        <input type="text" name="name" class="form-control" value="{{$student->name}}">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control" value="{{$student->age}}">
                        @error('age')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 row">
                    <div class="col">
                        <label for="gender"></label>
                        <select name="gender" id="gender">
            
                            <option value="male" @if($student->gender==="male"){{"selected"}}@endif>Male</option>
                            <option value="female" @if($student->gender==="female"){{"selected"}}@endif>Female</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="email">Email:</label><br>
                        <input type="email" name="email" value="{{$student->email}}">
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    
                </div>
                <div class="mt-2">
                    
                </div>
                <button class="btn btn-success mt-2">Submit</button>
            </form>
        </div>
        </div>

    </div>
</body>
</html>