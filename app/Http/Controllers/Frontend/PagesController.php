<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Institution_info;
use App\Models\User;
use App\Models\social;

class PagesController extends Controller
{
    public function noipunno(){
        $id = Auth::id();
        $institution = Institution_info::orderBy('id', 'desc')->where('user_id', $id)->get();
        if($institution->count() > 0) {
            return view('Frontend.pages.index')->with('institution', $institution);
        } else {
            return redirect()->route('getStarted'); //redirect get Started Page
        }
    }

    public function get_started() {
        // $id = Auth::id();
        // $userLavel = User::find($id)->user_lavel;
        // if($userLavel !== 2.0) {
            return view('Frontend.pages.Institution.getStarted');
        // } else {
        //     return redirect()->route('noipunno');
        // }
    }
}
