<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request) {
        $students = Student::paginate(10);
        return view("students.index", compact("students"));
    }
    public function create(Request $request) {
        return view("students.create");
    }
    public function store(Request $request){
        $request->validate( [
            "name"=> "required",
            "age"=> "required",
            "gender"=> "required",
            "email"=> "required"
        ]);
        Student::create([
            "name"=> $request->name,
            "age"=> $request->age,
            "gender"=> $request->gender,
            "email"=> $request->email
        ]);
        return redirect()->route("students.index")->with("success","Add student successfully!");
    }
    public function update(Request $request, $id) {
        $request->validate( [
            "name"=> "required",
            "age"=> "required",
            "gender"=> "required",
            "email"=> "required"
            ]);

            $toUpdate = Student::find($id);
            $toUpdate->name = $request->name;
            $toUpdate->age = $request->age;
            $toUpdate->gender = $request->gender;
            $toUpdate->email = $request->email;
            $toUpdate->save();

        return redirect()->route("students.index")->with("success","Student has updated!");
        }
    
     public function edit(Request $request, $id){
        $student = Student::find($id);
        
        return view("students.edit", compact("student"));
     }

     public function delete(Request $request, $id) {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route("students.index")->with("success","Student has deleted!");
     }
}