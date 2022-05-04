<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution_info;
use App\Models\Jobs;
use App\Models\User;
use App\Models\social;

class PagesController extends Controller
{
    public function noipunno()
    {
        $id = Auth::id();
        $user_level = User::find($id)->user_level;
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        if ($user_level >= 1) {
            return view('Frontend.pages.index')->with('institution', $institution)->with('user_level', $user_level);
        } else {
            if ($user_level === 0.0) {
                return redirect()->route('getStarted'); //redirect get Started Page
            } else if ($user_level === 0.10) {
                return redirect()->route('pending'); //redirect pending Page
            } else {
            }
        }
    }

    public function get_started()
    {
        $id = Auth::id();
        $userLevel = User::find($id)->user_level;
        return view('Frontend.pages.Institution.getStarted');
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

    public function apply_job(Request $request)
    {
        $request->validate([
            'institution_id' => 'required',
            'role' => 'required',
            'educational_qualifications' => 'required',
            'subject' => 'required',
            'address' => 'required',
        ]);

        $job = new Jobs;
        if ($request->role === 'teacher') {
            $request->validate([
                "job_post" => "required"
            ]);
            $job->job_post = $request->job_post;
        }

        $user_id = Auth::id();
        $user = User::find($user_id);
        $user->user_level = 0.1;
        $user->edu_qualifications = $request->educational_qualifications;
        $user->subject = $request->subject;
        $user->address = $request->address;
        $user->save();

        $job->user_id = $user_id;
        $job->institution_id = $request->institution_id;
        $job->job_role = $request->role;
        $job->save();

        return redirect()->route('pending');
    }

    public function pending()
    {
        return view('Frontend.pages.Institution.pending');
    }
}
