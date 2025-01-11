<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAuthController extends Controller
{
    public function loginPage(){
        return view('student.login');
    }
}
