<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student_info;
use App\Models\student_mark;
use App\Models\User;
use App\Models\StudentGroup;
use File;
use Image;
use Auth;

class StudentController extends Controller
{
    public function add_student()
    {
        return view('Frontend.pages.Student.addStudent');
    }
    public function admit()
    {
        return view('Frontend.pages.Student.admit');
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
    public function marks_store(Request $request) {
        $validation = $request->validate([
            'id'=>'required',
            'column'=>'required',
            'value'=>'required|numeric|max:100|min:0',
            // 'bangla'=>'required|max:100|min:0',
            // 'english'=>'required|max:100|min:0'
        ]);
        $student_mark = student_mark::find($request->id);
        $student_mark->{$request->column} = $request->value;
        $student_mark->update();
        return 'Successfully Updated.';
    }

    public function seatPlan()
    {
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
            $student_mark->save();

            session()->flash('success', 'New Student Information Updated Succesfully !!');
            return redirect()->back();
          
        }

        public function add_group(){
            return view('Frontend.partial.addgroup');
        }
        public function group_store(Request $request){
            $user_id = Auth::id();
            $group = new StudentGroup;
            $group->name = $request->class_group;
            $group->st_year= $request->st_year;
            $group->user_id = $user_id;
            $group->save();
            session()->flash('success', 'Your Class Group Added Successfully!!');
            return back();
        }
   
    }
        
  

