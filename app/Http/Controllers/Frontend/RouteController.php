<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request) {
        return view('Frontend.pages.index'
        // , [
        //     "env"=>$request->env
        // ]
    );
    }
}
