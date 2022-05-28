<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Classes;
use App\Models\User;

class ClassController extends Controller
{
    public function manageClass()
    {
        $classes = Classes::select("*")
            ->where("institution_id", User::find(Auth::id())->institution_id)
            ->get();
        return view('Frontend.pages.Class.manageClass')
            ->with("classes", $classes);
    }

    public function addClass(Request $request)
    {
        $request->validate([
            "class_name" => "required",
            // "class_order" => "required",
        ]);

        $classes = new Classes;
        $classes->class_name = $request->class_name;
        $classes->class_order = 1; //$request->class_order;
        $classes->institution_id = User::find(Auth::id())->institution_id;
        $classes->save();

        session()->flash('success', "class Has Been Added into Database.");
        return back();
    }

    public function deleteClass(Request $request)
    {
        $request->validate([
            "class_id" => "required"
        ]);
        Classes::find($request->class_id)->delete();

        session()->flash('success', "Class Has Been Deleted From Database.");
        return back();
    }
}
