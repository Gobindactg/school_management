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

    // this function use for show entry class
    public static function totalClass()
    {
        $totalClass = student_info::where('user_id', Auth::id())->distinct()->count('class');
        return $totalClass;
    }

    // this function use for total student count
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



    // start this use for religion student count
    public static function maleOne()
    {
        $maleOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('gender', 'male')->count('class');
        return $maleOne;
    }
    public static function femaleOne()
    {
        $femaleOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('gender', 'male')->count('class');
        return $femaleOne;
    }
    public static function maleTwo()
    {
        $maleOne = student_info::where('user_id', Auth::id())->where('class', 2)->where('gender', 'male')->count('class');
        return $maleOne;
    }
    public static function femaleTwo()
    {
        $femaleOne = student_info::where('user_id', Auth::id())->where('class', 2)->where('gender', 'male')->count('class');
        return $femaleOne;
    }
    public static function maleThree()
    {
        $maleOne = student_info::where('user_id', Auth::id())->where('class', 3)->where('gender', 'male')->count('class');
        return $maleOne;
    }
    public static function femaleThree()
    {
        $femaleOne = student_info::where('user_id', Auth::id())->where('class', 3)->where('gender', 'male')->count('class');
        return $femaleOne;
    }
    public static function maleFour()
    {
        $maleOne = student_info::where('user_id', Auth::id())->where('class', 4)->where('gender', 'male')->count('class');
        return $maleOne;
    }
    public static function femaleFour()
    {
        $femaleOne = student_info::where('user_id', Auth::id())->where('class', 4)->where('gender', 'male')->count('class');
        return $femaleOne;
    }
    public static function maleFive()
    {
        $maleOne = student_info::where('user_id', Auth::id())->where('class', 5)->where('gender', 'male')->count('class');
        return $maleOne;
    }
    public static function femaleFive()
    {
        $femaleOne = student_info::where('user_id', Auth::id())->where('class', 5)->where('gender', 'male')->count('class');
        return $femaleOne;
    }

    // use this function for count religion student class one

    public static function hinduOne()
    {
        $hinduOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('religion', 'hindu')->count('class');
        return $hinduOne;
    }
    public static function islamOne()
    {
        $islamOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('religion', 'islam')->count('class');
        return $islamOne;
    }
    public static function buddistOne()
    {
        $buddistOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('religion', 'buddist')->count('class');
        return $buddistOne;
    }
    public static function kristanOne()
    {
        $krisanOne = student_info::where('user_id', Auth::id())->where('class', 1)->where('religion', 'krisan')->count('class');
        return $krisanOne;
    }

    // use this function for count religion student class two

    public static function hinduTwo()
    {
        $hinduTwo = student_info::where('user_id', Auth::id())->where('class', 2)->where('religion', 'hindu')->count('class');
        return $hinduTwo;
    }
    public static function islamTwo()
    {
        $islamTwo = student_info::where('user_id', Auth::id())->where('class', 2)->where('religion', 'islam')->count('class');
        return $islamTwo;
    }
    public static function buddistTwo()
    {
        $buddistTwo = student_info::where('user_id', Auth::id())->where('class', 2)->where('religion', 'buddist')->count('class');
        return $buddistTwo;
    }
    public static function kristanTwo()
    {
        $kristanTwo = student_info::where('user_id', Auth::id())->where('class', 2)->where('religion', 'krisan')->count('class');
        return $kristanTwo;
    }
    // use this function for count religion student class three

    public static function hinduThree()
    {
        $hinduTwo = student_info::where('user_id', Auth::id())->where('class', 3)->where('religion', 'hindu')->count('class');
        return $hinduTwo;
    }
    public static function islamThree()
    {
        $islamTwo = student_info::where('user_id', Auth::id())->where('class', 3)->where('religion', 'islam')->count('class');
        return $islamTwo;
    }
    public static function buddistThree()
    {
        $buddistTwo = student_info::where('user_id', Auth::id())->where('class', 3)->where('religion', 'buddist')->count('class');
        return $buddistTwo;
    }
    public static function kristanThree()
    {
        $kristanTwo = student_info::where('user_id', Auth::id())->where('class', 3)->where('religion', 'krisan')->count('class');
        return $kristanTwo;
    }

    // use this function for count religion student class three

    public static function hinduFour()
    {
        $hinduTwo = student_info::where('user_id', Auth::id())->where('class', 4)->where('religion', 'hindu')->count('class');
        return $hinduTwo;
    }
    public static function islamFour()
    {
        $islamTwo = student_info::where('user_id', Auth::id())->where('class', 4)->where('religion', 'islam')->count('class');
        return $islamTwo;
    }
    public static function buddistFour()
    {
        $buddistTwo = student_info::where('user_id', Auth::id())->where('class', 4)->where('religion', 'buddist')->count('class');
        return $buddistTwo;
    }
    public static function kristanFour()
    {
        $kristanTwo = student_info::where('user_id', Auth::id())->where('class', 4)->where('religion', 'krisan')->count('class');
        return $kristanTwo;
    }

    // use this function for count religion student class three

    public static function hinduFive()
    {
        $hinduTwo = student_info::where('user_id', Auth::id())->where('class', 5)->where('religion', 'hindu')->count('class');
        return $hinduTwo;
    }
    public static function islamFive()
    {
        $islamTwo = student_info::where('user_id', Auth::id())->where('class', 5)->where('religion', 'islam')->count('class');
        return $islamTwo;
    }
    public static function buddistFive()
    {
        $buddistTwo = student_info::where('user_id', Auth::id())->where('class', 5)->where('religion', 'buddist')->count('class');
        return $buddistTwo;
    }
    public static function kristanFive()
    {
        $kristanTwo = student_info::where('user_id', Auth::id())->where('class', 5)->where('religion', 'krisan')->count('class');
        return $kristanTwo;
    }

    // use this function count total student
    public static function totalMale()
    {
        $totalMale = student_info::where('user_id', Auth::id())->where('gender', 'male')->count('class');
        return $totalMale;
    }
    public static function totalFemale()
    {
        $totalFemale = student_info::where('user_id', Auth::id())->where('gender', 'female')->count('class');
        return $totalFemale;
    }
    public static function totalHindu()
    {
        $totalHindu = student_info::where('user_id', Auth::id())->where('religion', 'hindu')->count('class');
        return $totalHindu;
    }
    public static function totalIslam()
    {
        $totalIslam = student_info::where('user_id', Auth::id())->where('religion', 'islam')->count('class');
        return $totalIslam;
    }
    public static function totalBuddist()
    {
        $totalBuddist = student_info::where('user_id', Auth::id())->where('religion', 'buddist')->count('class');
        return $totalBuddist;
    }
    public static function totalKristan()
    {
        $totalKristan = student_info::where('user_id', Auth::id())->where('religion', 'kristan')->count('class');
        return $totalKristan;
    }
}
