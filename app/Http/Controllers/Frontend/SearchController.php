<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institution_info;
use App\Models\Division;
use App\Models\District;
use App\Models\Upazila;
use App\Models\User;
use File;
use Image;
use Auth;

class SearchController extends Controller
{
    public function search_result(){
     
        $institution = Institution_info::orderBy('id', 'desc')->get();
        $division = Division::orderBy('priority', 'asc')->get();
        return view('Frontend.pages.Institution.searchresult')->with('institution', $institution)->with('division', $division);
    }
    public function search_result_show(Request $request)
    {
    $division = Division::orderBy('priority', 'asc')->get();
     $search = $request->search;
     $institution = Institution_info::orWhere('name', 'like', '%' . $search . '%')

     ->orderBy('id', 'desc')
     ->paginate(4);
     
       return view('Frontend.pages.Institution.searchresult2')->with('institution', $institution)->with('search', $search)->with('division', $division);
     }

     public function visitor($id){
  
        $institution = Institution_info::orderBy('id', 'desc')->where('emis_number', $id)->get();
         return view('Frontend.pages.Visitor.index')->with('institution', $institution);
     }
}
