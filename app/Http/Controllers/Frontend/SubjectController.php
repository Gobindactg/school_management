<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subject;
use App\Models\User;

class SubjectController extends Controller
{
    public function addSubject()
    {
        return view('Frontend.pages.Subject.addSubject');
    }
    public function manageSubject()
    {
        $subjects = Subject::select("*")
            ->where("institution_id", User::find(Auth::id())->institution_id)
            ->get();
        return view('Frontend.pages.Subject.manageSubject')
                ->with("subjects", $subjects);
    }


    public function saveSubject(Request $request)
    {
        $request->validate([
            "subject_name" => "required",
            "subject_class" => "required",
        ]);

        $subject = new Subject;
        $subject->subject_name = $request->subject_name;
        $subject->class = $request->subject_class;
        $subject->institution_id = User::find(Auth::id())->institution_id;
        $subject->save();

        session()->flash('success', "Subject Has Been Added into Database.");
        return back();
    }
}
