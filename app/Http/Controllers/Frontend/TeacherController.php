<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apply_job;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function addTeacher()
    {
        $user_id = Auth::id();
        $user = User::find($user_id);

        $jobs = Apply_job::select("*")
            ->where('job_post', 'teacher')
            ->where('institution_id', $user->institution_id)
            ->get();
        
        $teachers = [];
        foreach($jobs as $job) {
            $user= User::find($job->user_id);
            array_push($teachers, $user);
        }
        return view('Frontend.pages.Teacher.addTeacher')
            ->with('teachers', $teachers);
    }
    public function manageTeacher()
    {
        $institution_id = User::find(Auth::id())->institution_id;
        $teachers = User::select("*")
            ->where('institution_id', $institution_id)
            ->where('user_level', "3.00")->get();
        return view('Frontend.pages.Teacher.manageTeacher')->with("teachers", $teachers);
    }



    // crud functions
    public function approveTeacher(Request $request) {
        $request->validate([
            'user_id'=>'required'
        ]);
        
        $user = User::find($request->user_id);
        $institution_id = User::find(Auth::id())->institution_id;
        $user->institution_id = $institution_id;
        $user->user_level = 3;
        $user->save();

        $job = Apply_job::where("user_id", $request->user_id);
        $job->delete();

        session()->flash('success', "$user->name has been added to your institution as Teacher");
        return back();
    }
    public function removeTeacher(Request $request) {
        $request->validate([
            'user_id'=>'required'
        ]);
        
        $user = User::find($request->user_id);
        $user->user_level = 0;
        $user->save();

        $job = Apply_job::where("user_id", $request->user_id);
        $job->delete();

        session()->flash('success_deleted', "$user->name has been deleted");
        return back();
    }
}
