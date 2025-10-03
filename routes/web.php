<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("students", [StudentController::class, 'index'])->name("students.index");
Route::get("students/create", [StudentController::class, 'create'])->name("students.create");
Route::post("students/create", [StudentController::class, 'store'])->name("students.store");
Route::get("students/{id}/edit", [StudentController::class, 'edit'])->name("students.edit");
Route::post("students/{id}/update", [StudentController::class, 'update'])->name("students.update");
Route::get("students/{id}/delete", [StudentController::class, 'delete'])->name("students.delete");
Route::get("students/{id}/detail", [StudentController::class, 'detail'])->name("students.detail");