<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // list all stdents
    public function index() {
        $students = Student::all()->toArray();
        return array_reverse($students);
    }

    //


    //


    //

    
}
