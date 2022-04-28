<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function addSubject() {
        return view('Frontend.pages.Subject.addSubject');
    }
    public function manageSubject() {
        return view('Frontend.pages.Subject.manageSubject');
    }
}
