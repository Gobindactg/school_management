<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacher(){
        return view('Fontend.pages.Teacher.addteacher');
    }
    public function manageTeacher(){
        return view('Fontend.pages.Teacher.manageteacher');
    }
}
