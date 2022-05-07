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

use File;
use Intervention\Image\ImageManagerStatic as Image;

class StudentController extends Controller
{
	public function add_student()
	{
		return view('Frontend.pages.Student.addStudent');
	}
	public function admit(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->class;
		$group = $request->group;
		$year = $request->year;

		if (!empty($class) && empty($group) && empty($year)) {

			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'ASC')
				->paginate(14);

			return view('Frontend.pages.Student.admit', compact('marks', 'admit', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {

			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'ASC')
				->paginate(14);
			return view('Frontend.pages.Student.admit', compact('marks', 'class', 'group'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$routine = Routine::where('user_id', Auth::id())->where('class', $class);
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'ASC')
				->paginate(14);
			return view('Frontend.pages.Student.admit', compact('marks', 'class', 'group', 'year'));
		}
		if (empty($class) && empty($group) && empty($year)) {

			$marks = student_mark::Where('user_id', $user_id)
				->orderBy('st_roll', 'ASC')
				->paginate(14);
			return view('Frontend.pages.Student.admit', compact('marks', 'group', 'year'));
		}
	}

	public function manageStudent()
	{
		return view('Frontend.pages.Student.manageStudent');
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

	public function single_result($id)
	{
		$marks = student_mark::orderBy('id', 'desc')->where('id', $id)->get();
		$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
		return view('Frontend.pages.Student.singleResult', compact('marks', 'institution'));
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
			return view('Frontend.pages.Student.singleResult', compact('marks', 'class', 'group', 'institution'));
		}
		if (!empty($class) && !empty($group) && empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.singleResult', compact('marks', 'class', 'group', 'institution'));
		}
		if (!empty($class) && !empty($group) && !empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('class', 'like', '%' . $class . '%')
				->Where('st_group', 'like', '%' . $group . '%')
				->Where('st_year', 'like', '%' . $year . '%')
				->Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.singleResult', compact('marks', 'class', 'group', 'year', 'institution'));
		}
		if (empty($class) && empty($group) && empty($year)) {
			$institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
			$marks = student_mark::Where('user_id', $user_id)
				->orderBy('id', 'desc')
				->paginate(14);
			return view('Frontend.pages.Student.singleResult', compact('marks', 'class', 'group', 'year', 'institution'));
		}








		//     $marks = student_mark::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
		//     $institution = Institution_info::orderBy('id', 'desc')->where('user_id', Auth::id())->get();
		//     return view('Frontend.pages.Student.singleResult', compact('marks', 'institution'));
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

	// use for add filtering

	public function search_admit(Request $request)
	{
		$user_id = Auth::id();
		$class = $request->className !== 'null' ? $request->className : "";
		$group = $request->group !== 'null' ? $request->group : "";
		$year = $request->year !== 'null' ? $request->year : "";

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
		$items = [
			'class'=>$class,
			'group'=>$group,
			'year'=>$year,
			'marks'=>$marks,
			'routine'=>$routine,
		];
		return $items;
		// return view('Frontend.pages.Student.admitSearch', compact('marks', 'class', 'group', 'year', 'routine'));
	}
}
