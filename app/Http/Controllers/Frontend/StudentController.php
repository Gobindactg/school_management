<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student_info;
use App\Models\Institution_info;
use App\Models\student_mark;
use App\Models\Routine;
use App\Models\User;
use App\Models\StudentGroup;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

use DB;

use File;
use Intervention\Image\ImageManagerStatic as Image;

class StudentController extends Controller
{
	public function add_student()
	{
		return view('Frontend.pages.Student.addStudent');
	}

	// search admit with routine

	public function search_admit(Request $request)
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

				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'add_routine'));
			}
			if (!empty($class) && !empty($group) && empty($year)) {

				$marks = student_mark::Where('class', 'like', '%' . $class . '%')
					->Where('st_group', 'like', '%' . $group . '%')
					->Where('user_id', $user_id)
					->orderBy('id', 'desc')
					->paginate(14);
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group'));
			}
			if (!empty($class) && !empty($group) && !empty($year)) {

				$marks = student_mark::Where('class', 'like', '%' . $class . '%')
					->Where('st_group', 'like', '%' . $group . '%')
					->Where('st_year', 'like', '%' . $year . '%')
					->Where('user_id', $user_id)
					->orderBy('id', 'desc')
					->paginate(14);
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'year'));
			}
			if (empty($class) && empty($group) && empty($year)) {

				$marks = student_mark::Where('user_id', $user_id)
					->orderBy('id', 'desc')
					->paginate(14);
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'year'));
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

				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'routine'));
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
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'routine'));
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
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'year', 'routine'));
			}
			if (empty($class) && empty($group) && empty($year)) {
				$routine = Routine::Where('class', 'like', '%' . $class . '%')
					->Where('user_id', $user_id)
					->orderBy('id', 'desc')
					->paginate(14);
				$marks = student_mark::Where('user_id', $user_id)
					->orderBy('id', 'desc')
					->paginate(14);
				return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'year', 'routine'));
			}
		}
	}




	public function manageStudent()
	{
		$id = Auth::id();
		$totalStudent = student_info::orderBy('class', 'asc')->where('user_id', $id)->get();
		return view('Frontend.pages.Student.manageStudent', compact('totalStudent'));
	}

	public function student_delete($id)
	{
		// to delete student info data
		$student_del = student_info::find($id);
		$student_del->delete();
		// to delete student mark info data
		$st_mark_del = student_mark::where('student_info_id', $id);
		$st_mark_del->delete();
		session()->flash('delete', 'Your Routine Deleted Successfully');
		return back();
	}
	public function marks()
	{
		$id = Auth::id();
		$marks = student_mark::orderBy('id', 'desc')->where('user_id', $id)->get();
		return view('Frontend.pages.Student.marks')->with('marks', $marks);
	}
	public function marks_store(Request $request)
	{
		$validation = $request->validate([
			'id' => 'required',
			'column' => 'required',
			'value' => 'required|numeric|max:100|min:0',
			// 'bangla'=>'required|max:100|min:0',
			// 'english'=>'required|max:100|min:0'
		]);
		$student_mark = student_mark::find($request->id);
		$student_mark->{$request->column} = $request->value;
		$student_mark->update();
		return 'Successfully Updated.';
	}

	public function seatPlan(Request $request)
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
			return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group', 'year'));
		}
		if (empty($class) && empty($group) && empty($year)) {
			$marks = student_mark::Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.seatPlan', compact('marks', 'class', 'group', 'year'));
		}

		return view('Frontend.pages.Student.seatPlan');
	}


	// Print seatPlan




	public function studentAdd(Request $request)
	{


		// $request->validate([
		//     'roll'   => 'required',
		//     'name'   => 'required',
		//     'class'   => 'required',
		//     'group'   => 'required',
		//     'gender'   => 'required',
		//     'father_name'   => 'required',
		//     'mother_name'   => 'required',

		// ]);
		$user_id = Auth::id();
		$student = new student_info;
		$student->st_roll = $request->student_roll;
		$student->name = $request->student_name;
		$student->class = $request->class;
		$student->st_group = $request->group;
		$student->st_year = $request->st_year;
		$student->gender = $request->gender;
		$student->religion = $request->religion;
		$student->date_of_birth = $request->student_birth;
		$student->birth_reg_number = $request->student_birth_number;
		$student->father_name = $request->f_name;
		$student->mother_name = $request->m_name;
		$student->father_nid = $request->f_nid;
		$student->mother_nid = $request->m_nid;
		$student->address = $request->st_address;
		$student->user_id = Auth::id();

		// productImage model insert single image
		if ($request->hasFile('student_image')) {
			//   //insert that image
			$image = $request->file('student_image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('Frontend/studentImage/' . $img);
			Image::make($image)->save($location);
			$student->image = $img;
			$student->save();
		}

		$student->save();
		// add information student marks table
		$student_mark = new student_mark;
		$student_mark->user_id = Auth::id();
		$student_mark->student_info_id = $student->id;
		$student_mark->st_roll = $request->student_roll;
		$student_mark->name = $request->student_name;
		$student_mark->class = $request->class;
		$student_mark->st_group = $request->group;
		$student_mark->st_year = $request->st_year;
		$student_mark->institution_id = $request->institution_id;
		$student_mark->save();

		session()->flash('success', 'New Student Information Updated Succesfully !!');
		return redirect()->back();
	}

	public function add_group()
	{
		return view('Frontend.partial.addgroup');
	}
	public function group_store(Request $request)
	{
		$user_id = Auth::id();
		$group = new StudentGroup;
		$group->name = $request->class_group;
		$group->st_year = $request->st_year;
		$group->user_id = $user_id;
		$group->save();
		session()->flash('success', 'Your Class Group Added Successfully!!');
		return back();
	}

	public function single_result(Request $request, $id)
	{
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$marks = student_mark::orderBy('id', 'desc')->where('id', $id)->get();
		$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
		$maxMark = student_mark::Where('class', $class)->orderBy('bangla', 'desc')->take(1)->get();
		$maxMarkE = student_mark::Where('class', $class)->orderBy('english', 'desc')->take(1)->get();
		$maxMarkM = student_mark::Where('class', $class)->orderBy('math', 'desc')->take(1)->get();
		$maxMarkS = student_mark::Where('class', $class)->orderBy('science', 'desc')->take(1)->get();
		$maxMarkB = student_mark::Where('class', $class)->orderBy('bob', 'desc')->take(1)->get();
		$maxMarkR = student_mark::Where('class', $class)->orderBy('religion', 'desc')->take(1)->get();
		return view('Frontend.pages.Student.singleResult', compact('marks', 'institution', 'maxMark', 'maxMarkE', 'maxMarkM', 'maxMarkS', 'maxMarkB', 'maxMarkR'));
	}
	//  start single result PDF
	public function single_resultPDF(Request $request, $id)
	{
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$marks = student_mark::orderBy('id', 'desc')->where('id', $id)->get();
		$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
		$maxMark = student_mark::Where('class', $class)->orderBy('bangla', 'desc')->take(1)->get();
		$maxMarkE = student_mark::Where('class', $class)->orderBy('english', 'desc')->take(1)->get();
		$maxMarkM = student_mark::Where('class', $class)->orderBy('math', 'desc')->take(1)->get();
		$maxMarkS = student_mark::Where('class', $class)->orderBy('science', 'desc')->take(1)->get();
		$maxMarkB = student_mark::Where('class', $class)->orderBy('bob', 'desc')->take(1)->get();
		$maxMarkR = student_mark::Where('class', $class)->orderBy('religion', 'desc')->take(1)->get();
		$pdf = PDF::loadView('Frontend.pages.Student.singleResultPDF', compact('marks', 'institution', 'maxMark', 'maxMarkE', 'maxMarkM', 'maxMarkS', 'maxMarkB', 'maxMarkR'));
		return $pdf->stream('MarkSheet.pdf');
	}

	public function search_result(Request $request)
	{

		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;

		if (!empty($class) && empty($group) && empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.searchResult', compact('marks', 'class', 'group', 'institution'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.searchResult', compact('marks', 'class', 'group', 'institution'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.searchResult', compact('marks', 'class', 'group', 'year', 'institution'));
		}
		if (empty($class) && empty($group) && empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.searchResult', compact('marks', 'class', 'group', 'year', 'institution'));
		}
	}


	// create mark entry student search
	public function search_mark(Request $request)
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
			return view('Frontend.pages.Student.marks', compact('marks', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.marks', compact('marks', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.marks', compact('marks', 'class', 'group', 'year'));
		}
		if (empty($class) && empty($group) && empty($year)) {
			$marks = student_mark::Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.marks', compact('marks', 'class', 'group', 'year'));
		}
	}

	public function publish_result()
	{
		$user_id = Auth::id();
		$resultPublished = student_mark::where('user_id', $user_id)->get();
		$mark = student_mark::where('user_id', $user_id)->sum(student_mark::raw('bangla + english'));


		return view('Frontend.pages.Student.shortResult', compact('resultPublished', 'mark'));
	}



	// search short result

	public function shortResult(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;

		if (!empty($class) && empty($group) && empty($year)) {
			$resultPublished = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.shortResult', compact('resultPublished', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {
			$resultPublished = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.shortResult', compact('resultPublished', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$resultPublished = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.shortResult', compact('resultPublished', 'class', 'group', 'year'));
		}
		if (empty($class) && empty($group) && empty($year)) {
			$resultPublished = student_mark::Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.shortResult', compact('resultPublished', 'class', 'group', 'year'));
		}
	}
	// short result Print

	public function shortResultShow(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;

		$resultPublished = student_mark::orderBy('id', 'asc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('class', 'like', '%' . $group . '%')
			->Where('class', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->orderBy('id', 'asc')
			->paginate(14);
		return view('Frontend.pages.Student.shortResultPDF', compact('resultPublished', 'class', 'group', 'year'));
	}

	//  short result Print
	// short result Print

	public function shortResultPDF(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$resultPublished = student_mark::orderBy('id', 'asc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('st_group', 'like', '%' . $group . '%')
			->Where('st_year', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->orderBy('id', 'asc')
			->paginate(14);
		$pdf = PDF::loadView('Frontend.pages.Student.shortResultPrintPDF', compact('resultPublished', 'class', 'group', 'year'));
		return $pdf->stream('PublishedResult.pdf');
	}


	// tabulation
	public function tabulation(Request $request)
	{
		$user_id = Auth::id();
		$add = $request->add;
		$result = student_mark::where('user_id', $user_id)->paginate(10);
		return view('Frontend.pages.Student.tabulationSheet', compact('result', 'add'));
	}
	// search tabulation sheet

	public function searchTabulation(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$add = $request->add;
		$result = student_mark::orderBy('id', 'desc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('st_group', 'like', '%' . $group . '%')
			->Where('st_year', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->paginate(3);
		return view('Frontend.pages.Student.tabulationSheet', compact('result', 'class', 'group', 'year', 'add'));
	}

	//  tabulatin Print section

	public function tabulationPrintShow(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$add = $request->add;
		$result = student_mark::orderBy('id', 'desc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('st_group', 'like', '%' . $group . '%')
			->Where('st_year', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->get();
		return view('Frontend.pages.Student.tabulationPrint', compact('result', 'class', 'group', 'year', 'add'));
	}

	// start tabulation PDF
	public function tabulationPDF(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$add = $request->add;

		$result = student_mark::orderBy('id', 'desc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('st_group', 'like', '%' . $group . '%')
			->Where('st_year', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->get();
		$pdf = PDF::loadView('Frontend.pages.Student.tabulationPDF', compact('result', 'class', 'group', 'add'))->setPaper('a4', 'landscape');
		return $pdf->stream('tabulationSheet.pdf');
	}

	public function tabulationPDF2(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;
		$add = $request->add;
		$totalStudent = $request->Tstudent;
		$tPass = $request->tPass;
		$tFail = $request->tFail;
		$result = student_mark::orderBy('id', 'desc')
			->Where('class', 'like', '%' . $class . '%')
			->Where('st_group', 'like', '%' . $group . '%')
			->Where('st_year', 'like', '%' . $year . '%')
			->Where('user_id', $user_id)
			->get();
		$fileName = 'Student_List.pdf';
		$mpdf = new \Mpdf\Mpdf([
			'format' => 'A4',
			'orientation' => 'L',
			'margin_left' => 10,
			'margin_top' => 16,
			'margin_right' => 10,
			'margin_bottom' => 13,
			'margin_header' => 5,
			'margin_footer' => 5,
		]);

		$html = \View::make('Frontend.pages.Student.tabulationPDF', compact('result', 'class', 'group', 'add', 'totalStudent', 'tPass', 'tFail'));
		$html = $html->render();

		$mpdf->SetHeader('Publish Result | Printed By {DATE j-m-Y} | Page Number {PAGENO}');

		// $mpdf->SetWatermarkText('Noipunno digital');
		$mpdf->showWatermarkText = true;
		$mpdf->watermark_font = 'Smooch';

		$mpdf->WriteHTML($html);

		$mpdf->Output($fileName, 'I');
	}
}
