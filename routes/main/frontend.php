<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\InstitutionController;
use App\Http\Controllers\Frontend\TeacherController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Frontend\LibraryController;
use App\Http\Controllers\Frontend\DivisionController;
use App\Http\Controllers\Frontend\DistrictController;
use App\Http\Controllers\Frontend\SearchController;
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
  Route::get('/add_institution', [InstitutionController::class, 'add_institution'])->name('addInstitution');
  Route::get('/manage_institution', [InstitutionController::class, 'manageInstitution'])->name('manage_institution');
    Route::post('/update-institution/{id}', [InstitutionController::class, 'update'])->name('update.institution');
      Route::get('/manage-edit/{id}', [InstitutionController::class, 'editInstitution'])->name('edit.institution');
});


//student
Route::group(['prefix'=>'student'], function(){
  Route::get('/add_student', [StudentController::class, 'add_student'])->name('add_student');
  Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
  Route::get('/manageStudent', [StudentController::class, 'manageStudent'])->name('manageStudent');
  Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
  Route::post('/marks-store', [StudentController::class, 'marks_store'])->name('marks_store');
  Route::get('/seatPlan', [StudentController::class, 'seatPlan'])->name('seatPlan');
});



// teacher
Route::group(['prefix'=>'teacher'], function(){
  Route::get('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
  Route::get('/manageTeacher', [TeacherController::class, 'manageTeacher'])->name('manageTeacher');
});


// search result
Route::group(['prefix'=>'search'], function(){
Route::get('/result', [SearchController::class, 'search_result'])->name('search.result');
Route::get('/result-show', [SearchController::class, 'search_result_show'])->name('search.result.show');
});



// API Route
Route::get('get-districts/{id}', function($id){
  return json_encode(App\Models\District::where('division_id', $id)->get());
});
Route::get('get-upazilas/{id}', function($id){
  return json_encode(App\Models\Upazila::where('district_id', $id)->get());
});

Route::get('get-institution/{id}', function($id){
  return json_encode(App\Models\Institution_info::where('upazila_id', $id)->get());
});


// visitor route

Route::get('/visitor/{id}', [SearchController::class, 'visitor'])->name('visitor');


// Library
Route::group(['prefix'=>'library'], function() {
  Route::get('/', [LibraryController::class, 'index'])->name('library');
  Route::get('/add_book', [LibraryController::class, 'add_book'])->name('add_book');
  Route::get('/add_category', [LibraryController::class, 'add_category'])->name('add_category');
  Route::get('/manage_borrowed_books', [LibraryController::class, 'manage_borrowed_books'])->name('manage_borrowed_books');
  Route::get('/create_library_card', [LibraryController::class, 'create_library_card'])->name('create_library_card');
  Route::get('/manage_library_card', [LibraryController::class, 'manage_library_card'])->name('manage_library_card');
});


// Authentication
Auth::routes();
