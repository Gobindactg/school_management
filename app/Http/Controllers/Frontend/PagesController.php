<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
// <<<<<<< HEAD
// use App\Models\Institution_info;
// use Illuminate\Http\Request;
// use Auth;

// =======
use Illuminate\Http\Request;
use Auth;
use App\Models\Institution_info;
// >>>>>>> gobinda

class PagesController extends Controller
{
    public function index(){
        $id = Auth::id();
        $institution2 = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        return view('Frontend.pages.index')->with('institution', $institution2);
    }
}
