<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// <<<<<<< HEAD
// use App\Models\Division;
// use App\Models\District;
// use App\Models\Institution_info;
// use Illuminate\Http\Request;
// =======
use Illuminate\Http\Request;
use App\Models\Institution_info;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\User;
use File;
// >>>>>>> gobinda
use Image;
use Auth;

class InstitutionController extends Controller
{
// <<<<<<< HEAD
//     public function add_institution()
//     {
//         $division = Division::orderBy('priority', 'asc')->get();
//         $district= District::orderBy('id', 'asc')->get();
//         return view('Frontend.pages.Institution.add_instution')->with('district', $district)->with('division', $division);
//     }

// =======
    public function add_institution(){
         $division = Division::orderBy('priority', 'asc')->get();
        $district= District::orderBy('id', 'asc')->get();
        return view('Frontend.pages.Institution.instution')->with('district', $district)->with('division', $division);
        
    }
// >>>>>>> gobinda
    public function manageInstitution(){
        $id = Auth::id();
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Frontend.pages.Institution.manageInstitution')->with('institution', $institution);
    }

    public function addInstution_store(Request $request){
        $request->validate([
            'instution_name'   => 'required',
            'institution_address'   => 'required',
            'institution_emis'   => 'required',
            'user_id'   => 'unique:users',
      
          ]);
          $user_id = Auth::id();
          $users = Institution_info::where('user_id', $user_id)->get();
          if (count($users) > 0 ) {
// <<<<<<< HEAD

// =======
// >>>>>>> gobinda
            session()->flash('fail', 'Your Institution Already Add !! Please Update Your Institution Information...');
            return back();
          }else{
          $institution = new Institution_info;
          $institution->name = $request->instution_name;
          $institution->address = $request->institution_address;
          $institution->emis_number = $request->institution_emis;
// <<<<<<< HEAD
//           $institution->user_id = Auth::id();
//           // productImage model insert single image
//           if ($request->hasFile('institution_logo')) {
// =======
          $institution->division_id = $request->division_id;
          $institution->district_id = $request->district_id;
          $institution->upazila_id = $request->upazila_id;

          $institution->user_id = Auth::id();
          
          // productImage model insert single image
            if ($request->hasFile('institution_logo')) {
// >>>>>>> gobinda
            //   //insert that image
            $image = $request->file('institution_logo');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('institutionImage/' . $img);
            Image::make($image)->save($location);
            
            $institution->image = $img;
            $institution->save();
// <<<<<<< HEAD
//           }
//           session()->flash('success', 'Institution Information Updated Succesfully !!');
//           return redirect()->route('add_institution');
//         }
//     }

//     public function editInstitution($id){
//       $institution = Institution_info::find($id);
//       $division = Division::orderBy('priority', 'asc')->get();
//       $district= District::orderBy('id', 'asc')->get();
//       return view('Fontend.pages.Institution.edit')->with('institution', $institution)->with('division', $division)->with('district', $district);
//   }
// =======
            }
          session()->flash('success', 'Institution Information Updated Succesfully !!');
          return redirect()->route('institution');
        }
    }
    public function editInstitution($id){
        $institution = Institution_info::find($id);
        $division = Division::orderBy('priority', 'asc')->get();
        $district= District::orderBy('id', 'asc')->get();
        return view('Frontend.pages.Institution.edit')->with('institution', $institution)->with('division', $division)->with('district', $district);
    }

  
// >>>>>>> gobinda
}
