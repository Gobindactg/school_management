<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function add_student(){
        return view('Frontend.pages.Student.addstudent');
    }
    public function manageStudent(){
        return view('Frontend.pages.Student.managestudent');
    }
    public function admit(){
        return view('Frontend.pages.Student.admit');
    }
    public function seatPlan(){
        return view('Frontend.pages.Student.seatPlan');
    }
    public function marks(){
        return view('Frontend.pages.Student.mark');
    }
  
}
