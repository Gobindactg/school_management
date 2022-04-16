<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Institution_info;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use File;
use Image;

class InstitutionController extends Controller
{
    public function add_institution()
    {
        $division = Division::orderBy('priority', 'asc')->get();
        $district = District::orderBy('id', 'asc')->get();
        return view('Frontend.pages.Institution.add_instution')->with('district', $district)->with('division', $division);
    }
    public function manageInstitution()
    {
        $id = Auth::id();
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Frontend.pages.Institution.manageInstitution')->with('institution', $institution);
    }

    public function addInstution_store(Request $request)
    {
        $request->validate([
            'instution_name'   => 'required',
            'institution_address'   => 'required',
            'institution_emis'   => 'required',
            'division_id'   => 'required',
            'district_id'   => 'required',
            'upazila_id'   => 'required',

        ]);
        $user_id = Auth::id();
        $users = Institution_info::where('user_id', $user_id)->get();
        if (count($users) > 0) {

            session()->flash('fail', 'Your Institution Already Add !! Please Update Your Institution Information...');
            return back();
        } else {
            $institution = new Institution_info;
            $institution->name = $request->instution_name;
            $institution->address = $request->institution_address;
            $institution->emis_number = $request->institution_emis;
            $institution->division_id = $request->division_id;
            $institution->district_id = $request->district_id;
            $institution->upazila_id = $request->upazila_id;

            $institution->user_id = Auth::id();

            // productImage model insert single image
            if ($request->hasFile('institution_logo')) {
                //insert that image
                $image = $request->file('institution_logo');
                $img = $request->institution_emis."_".time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('institutionImage/' . $img);
                Image::make($image)->save($location);

                $institution->image = $img;
            }

            $institution->save();

            session()->flash('success', 'Institution Information Updated Succesfully !!');
            return redirect()->route('addInstitution');
        }
    }
    public function editInstitution($id)
    {
        $institution = Institution_info::find($id);
        $division = Division::orderBy('priority', 'asc')->get();
        $district = District::orderBy('id', 'asc')->get();
        return view('Frontend.pages.Institution.edit')->with('institution', $institution)->with('division', $division)->with('district', $district);
    }
}
