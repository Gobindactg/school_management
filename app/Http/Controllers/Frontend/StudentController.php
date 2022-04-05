<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function add_student()
    {
        return view('Frontend.pages.Student.addStudent');
    }
    public function admit()
    {
        return view('Frontend.pages.Student.admit');
    }
    public function manageStudent()
    {
        return view('Frontend.pages.Student.manageStudent');
    }
    public function marks()
    {
        return view('Frontend.pages.Student.marks');
    }
    public function seatPlan()
    {
        return view('Frontend.pages.Student.seatPlan');
    }
}
