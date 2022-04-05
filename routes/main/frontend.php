<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\InstitutionController;
use App\Http\Controllers\Frontend\TeacherController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Frontend\DivisionController;
use App\Http\Controllers\Frontend\DistrictController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [PagesController::class, 'index']);

//institution
Route::group(['prefix'=>'institute'], function(){
  Route::get('/', [PagesController::class, 'index'])->name('index');
  Route::post('/institution-store', [InstitutionController::class, 'addInstution_store'])->name('institution_store');
  Route::get('/add_institution', [InstitutionController::class, 'add_institution'])->name('add_institution');
  Route::get('/manage_institution', [InstitutionController::class, 'manageInstitution'])->name('manage_institution');
});


//student
Route::group(['prefix'=>'student'], function(){
  Route::get('/add_student', [StudentController::class, 'add_student'])->name('add_student');
  Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
  Route::get('/manageStudent', [StudentController::class, 'manageStudent'])->name('manageStudent');
  Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
  Route::get('/seatPlan', [StudentController::class, 'seatPlan'])->name('seatPlan');
});



//teacher
Route::group(['prefix'=>'teacher'], function(){
  Route::get('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
  Route::get('/manageTeacher', [TeacherController::class, 'manageTeacher'])->name('manageTeacher');
});



// API Route
Route::get('get-districts/{id}', function($id){
  return json_encode(App\Models\District::where('division_id', $id)->get());
});
Route::get('get-upazilas/{id}', function($id){
  return json_encode(App\Models\Upazila::where('district_id', $id)->get());
});


