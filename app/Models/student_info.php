<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class student_info extends Model
{
    use HasFactory;

    public static function totalStudent()
    {
        // $countStudent = student_info::where('user_id', Auth::id())->get();
        // $totalStudent = 0;
        // foreach ($countStudent as $countStudents) {
        //     $totalStudent = +$countStudents->user_id;
        // }
        $totalStudent = student_info::where('user_id', Auth::id())->count('name');
        return $totalStudent;
    }

    public static function totalClass()
    {
        $totalClass = student_info::where('user_id', Auth::id())->distinct()->count('class');
        return $totalClass;
    }
    public static function totalStudentFive()
    {
        $totalStudentFive = student_info::where('user_id', Auth::id())->where('class', 5)->count('class');
        return $totalStudentFive;
    }
    public static function totalStudentFour()
    {
        $totalStudentFour = student_info::where('user_id', Auth::id())->where('class', 4)->count('class');
        return $totalStudentFour;
    }
    public static function totalStudentThree()
    {
        $totalStudentThree = student_info::where('user_id', Auth::id())->where('class', 3)->count('class');
        return $totalStudentThree;
    }
    public static function totalStudentTwo()
    {
        $totalStudentTwo = student_info::where('user_id', Auth::id())->where('class', 2)->count('class');
        return $totalStudentTwo;
    }
    public static function totalStudentOne()
    {
        $totalStudentOne = student_info::where('user_id', Auth::id())->where('class', 1)->count('class');
        return $totalStudentOne;
    }
}
