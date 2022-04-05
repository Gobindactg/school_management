<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index() {
        return view('Frontend.pages.index');
    }

    public function login() {
        return view('Frontend.pages.login');
    }
}
