<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('Frontend.landing.pages.index');
    }
    public function about() {
        return view('Frontend.landing.pages.about');
    }
}
