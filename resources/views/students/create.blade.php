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
                    <h2>Add Student</h2>
                </div>
                <div class="col text-end">
                    <a href="{{ route("students.index")}}" class="btn btn-primary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route("students.store") }}", method="POST">

                @csrf
                <div class="mt-2 row">
                    <div class="col">
                        <label for="name">Name: </label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="age">Age:</label>
                        <input type="number" name="age" class="form-control">
                        @error('age')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-2 row">
                    <div class="col">
                        <label for="gender"></label>
                        <select name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="email">Email:</label><br>
                        <input type="email" name="email">
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