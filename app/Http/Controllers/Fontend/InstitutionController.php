<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function addInstution(){
        return view('Fontend.pages.Institution.instution');
    }
    public function manageInstitution(){
        return view('Fontend.pages.Institution.manageInstitution');
    }
}
