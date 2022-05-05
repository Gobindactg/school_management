<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Routine;

class RoutineController extends Controller
{

    public function manage_routine(Request $request)
    {
        $user_id = Auth::id();
        $routine = Routine::orderBy('id', 'desc')->where('user_id', $user_id)->get();
        return view('Frontend.pages.Student.manage_routine')->with('routine', $routine);
    }

    public function routine_store(Request $request)
    {
        $request->validate([
            "class"=>"required",
            "group"=>"required",
            "year"=>"required",
            "exam_title"=>"required",
            "subject"=>"required",
            "day"=>"required",
            "date"=>"required",
            "time"=>"required"
        ]);
        $user_id = Auth::id();
        $routine = new Routine;
        $routine->class = $request->class;
        $routine->st_group = $request->group;
        $routine->st_year = $request->year;
        $routine->exam_title = $request->exam_title;
        $routine->subject = $request->subject;
        $routine->exam_day = $request->day;
        $routine->exam_date = $request->date;
        $routine->exam_time = $request->time;
        $routine->user_id = $user_id;
        $routine->save();
        session()->flash('success', 'Your Routine Added Successfully !!');
        return redirect()->back();
    }
}
