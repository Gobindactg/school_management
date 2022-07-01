<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution_info;
use App\Models\Jobs;
use App\Models\User;
use App\Models\social;
use App\Models\Routine;
use App\Models\student_mark;
use Barryvdh\DomPDF\Facade\Pdf;

class PagesController extends Controller
{
    public function noipunno()
    {
        $id = Auth::id();
        $user_level = User::find($id)->user_level;
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();

        if ($user_level >= 1) {
            return view('Frontend.index', compact('institution', 'user_level'));
        } else {
            if ($user_level === 0.0) {
                return redirect()->route('addInstitution'); //redirect get Started Page
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

    public function userdashboard()
    {
        return view('Frontend.pages.dashboard.userdashboard');
    }





    public function admitPDF(Request $request)
    {
        $user_id = Auth::id();
        $class = $request->class;
        $group = $request->group;
        $year = $request->year;
        $add_routine = $request->add_routine;
        $exam = $request->exam;


        if (empty($add_routine)) {
            if (!empty($class) && empty($group) && empty($year)) {
                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->get();

                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'add_routine'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (!empty($class) && !empty($group) && empty($year)) {

                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('st_group', 'like', '%' . $group . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (!empty($class) && !empty($group) && !empty($year)) {

                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('st_group', 'like', '%' . $group . '%')
                    ->Where('st_year', 'like', '%' . $year . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'year'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (empty($class) && empty($group) && empty($year)) {

                $marks = student_mark::Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'year'));
                return $pdf->stream('AdmitCard.pdf');
            }
        } else {
            if (!empty($class) && empty($group) && empty($year)) {

                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->get();
                $routine = Routine::Where('class', $class)
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'asc')
                    ->get();

                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'routine'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (!empty($class) && !empty($group) && empty($year)) {
                $routine = Routine::Where('class', 'like', '%' . $class . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('st_group', 'like', '%' . $group . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'routine'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (!empty($class) && !empty($group) && !empty($year)) {
                $routine = Routine::Where('class', 'like', '%' . $class . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                    ->Where('st_group', 'like', '%' . $group . '%')
                    ->Where('st_year', 'like', '%' . $year . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'year', 'routine'));
                return $pdf->stream('AdmitCard.pdf');
            }
            if (empty($class) && empty($group) && empty($year)) {
                $routine = Routine::Where('class', 'like', '%' . $class . '%')
                    ->Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $marks = student_mark::Where('user_id', $user_id)
                    ->orderBy('id', 'desc')
                    ->paginate(14);
                $pdf = PDF::loadView('Frontend.pages.Student.admitPDF', compact('marks', 'class', 'group', 'year', 'routine'));
                return $pdf->stream('AdmitCard.pdf');
            }
        }
    }
}
