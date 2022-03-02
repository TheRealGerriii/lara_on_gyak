<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function allStudents() {
        $students = DB::select("SELECT * FROM students");
        
        foreach($students as $student){
            
            print_r($student);
        }
        //print_r($students);
    }
    public function getStudent() {

        $student = DB::select("SELECT * FROM students WHERE id = 3"  );
        print_r($student);
    }
    public function newStudent() {

        $student = DB::insert("INSERT INTO students (name, email, phone) VALUES (?,?,?)", ["Nagyon Olga", "olga@olga.hu", "123456789"] );
        print_r($student);
    }
}
