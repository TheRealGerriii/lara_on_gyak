<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/all-student", [StudentController::class, "allStudents"]);
Route::get("/get-student", [StudentController::class, "getStudent"]);
Route::get("/new-student", [StudentController::class, "newStudent"]);
Route::get("/update-student", [StudentController::class, "updateStudent"]);
Route::get("/delete-student", [StudentController::class, "deleteStudent"]);