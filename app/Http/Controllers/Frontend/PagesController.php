<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Institution_info;
use App\Models\social;

class PagesController extends Controller
{
    public function noipunno(){
        $id = Auth::id();
        $institution2 = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Frontend.pages.index')->with('institution', $institution2);
    }
}
