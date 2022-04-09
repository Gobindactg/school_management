<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacher(){
        return view('Frontend.pages.Teacher.addTeacher');
    }
    public function manageTeacher(){
        return view('Frontend.pages.Teacher.manageTeacher');
    }
}