<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class StudentController extends Controller
{
    public function addStudent(){
        return view('Fontend.pages.Student.addstudent');
    }
    public function manageStudent(){
        return view('Fontend.pages.Student.managestudent');
    }
    public function admit(){
        return view('Fontend.pages.Student.admit');
    }
    public function seat_plan(){
        return view('Fontend.pages.Student.seatPlan');
    }
    public function mark(){
        return view('Fontend.pages.Student.mark');
    }
  
}
