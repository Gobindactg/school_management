<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution_info;
use App\Models\Apply_job;
use App\Models\User;
use App\Models\social;

class PagesController extends Controller
{
    public function noipunno()
    {
        $id = Auth::id();
        $user_level = User::find($id)->user_level;
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        if ($institution->count() > 0) {
            return view('Frontend.pages.index')->with('institution', $institution)->with('user_level', $user_level);
        } else {
            return redirect()->route('getStarted'); //redirect get Started Page
        }
    }

    public function get_started()
    {
        $id = Auth::id();
        $userLevel = User::find($id)->user_lavel;
        if ($userLevel !== 2.0) {
            return view('Frontend.pages.Institution.getStarted');
        }
        else {
            return redirect()->route('noipunno');
        }
    }

    public function join_institution()
    {
        $id = Auth::id();
        $user = User::find($id);
        return view('Frontend.pages.Institution.joinInstitution')->with('user', $user);
    }

    public function institution_list(Request $request)
    {
        $request->validate([
            'school_query' => 'required'
        ]);
        $institutions = Institution_info::orWhere('name', 'like', '%' . $request->school_query . '%')->get(["id", "name", "address", "emis_number", "image"]);

        return $institutions;
    }

    public function apply_job(Request $request) {
        $request->validate([
            'institution_id'=>'required',
            'role'=>'required',
        ]);
        
        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->user_level = 0.1;
        // $user->institution_id = $request->institution_id;
        $user->save();

        $job = new Apply_job;
        $job->user_id = $user_id;
        $job->institution_id = $request->institution_id;
        $job->job_post = $request->role;
        $job->save();

        return redirect()->route('pending');
    }

    public function pending() {
        return view('Frontend.pages.Institution.pending');
    }
}
