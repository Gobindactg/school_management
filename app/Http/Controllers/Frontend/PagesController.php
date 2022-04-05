<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Institution_info;
use Illuminate\Http\Request;
use Auth;


class PagesController extends Controller
{
    public function index(){
        $id = Auth::id();
        $institution2 = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Frontend.pages.index')->with('institution', $institution2);
    }

}
