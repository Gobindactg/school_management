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
   
}
