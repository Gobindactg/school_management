<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Institution_info;

class PagesController extends Controller
{
    public function index(){
        $id = Auth::id();
        $institution2 = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Fontend.pages.index')->with('institution', $institution2);
    }
   
}
