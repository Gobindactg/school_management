<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution_info;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\User;
use App\Models\student_mark;
use App\Models\Routine;
use Barryvdh\DomPDF\Facade\Pdf;
use File;
use Image;
use Auth;

class SearchController extends Controller
{
        public function search_result()
        {

                $institution = Institution_info::orderBy('id', 'desc')->get();
                $division = Division::orderBy('priority', 'asc')->get();
                return view('Frontend.pages.Institution.searchresult')->with('institution', $institution)->with('division', $division);
        }
        public function search_result_show(Request $request)
        {
                $division = Division::orderBy('priority', 'asc')->get();
                $search = $request->search;
                $institution = Institution_info::orWhere('division_id', 'like', '%' . $search . '%')
                        ->orWhere('district_id', 'like', '%' . $search . '%')
                        ->orWhere('upazila_id', 'like', '%' . $search . '%')
                        ->orderBy('id', 'desc')
                        ->paginate(14);

                return view('Frontend.pages.Institution.searchresult2')->with('institution', $institution)->with('search', $search)->with('division', $division);
        }

        public function visitor($id)
        {

                $institution = Institution_info::orderBy('id', 'desc')->where('emis_number', $id)->get();
                return view('Frontend.pages.Visitor.index')->with('institution', $institution);
        }

        public function search_seatplan(Request $request)
        {
                $user_id = Auth::id();
                $class = $request->class;
                $group = $request->group;
                $year = $request->year;

                if (!empty($class) && empty($group) && empty($year)) {

                        $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->get();
                        $routine = Routine::Where('class', $class)
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'asc')
                                ->get();
                        return view('Frontend.pages.Student.seatPlan')->with('marks', $marks)->with('routine', $routine);
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
                        return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group', 'routine'));
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
                        return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group', 'year', 'routine'));
                }
                if (empty($class) && empty($group) && empty($year)) {
                        $routine = Routine::Where('class', 'like', '%' . $class . '%')
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        $marks = student_mark::Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group', 'year', 'routine'));
                }
        }

        // start print seatplan
        public function seatPlanPDF(Request $request)
        {
                $user_id = Auth::id();
                $class = $request->class;
                $group = $request->group;
                $year = $request->year;

                if (!empty($class) && empty($group) && empty($year)) {
                        $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        $pdf =  PDF::loadview('Frontend.pages.Student.seatPlanPDF', compact('marks', 'class', 'group'));
                        return $pdf->stream('SeatPlan.pdf');
                }
                if (!empty($class) && !empty($group) && empty($year)) {
                        $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                                ->Where('st_group', 'like', '%' . $group . '%')
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        $pdf =  PDF::loadview('Frontend.pages.Student.seatPlanPDF', compact('marks', 'class', 'group'));
                        return $pdf->stream('SeatPlan.pdf');
                }
                if (!empty($class) && !empty($group) && !empty($year)) {
                        $marks = student_mark::Where('class', 'like', '%' . $class . '%')
                                ->Where('st_group', 'like', '%' . $group . '%')
                                ->Where('st_year', 'like', '%' . $year . '%')
                                ->Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        $pdf =  PDF::loadview('Frontend.pages.Student.seatPlanPDF', compact('marks', 'class', 'group', 'year'));
                        return $pdf->stream('SeatPlan.pdf');
                }
                if (empty($class) && empty($group) && empty($year)) {
                        $marks = student_mark::Where('user_id', $user_id)
                                ->orderBy('id', 'desc')
                                ->paginate(14);
                        $pdf =  PDF::loadview('Frontend.pages.Student.seatPlanPDF', compact('marks', 'class', 'group', 'year'));
                        return $pdf->stream('SeatPlan.pdf');
                }
        }
}
