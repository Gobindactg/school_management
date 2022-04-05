<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index()
    {
        return view('Frontend.pages.Institution.index');
    }
    public function add_institution()
    {
        return view('Frontend.pages.Institution.add_instution');
    }
    public function manage_institution()
    {
        return view('Frontend.pages.Institution.manageInstitution');
    }



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


    public function addTeacher()
    {
        return view('Frontend.pages.Teacher.addTeacher');
    }
    public function manageTeacher()
    {
        return view('Frontend.pages.Teacher.manageTeacher');
    }
}
