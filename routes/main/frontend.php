<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Landing\PagesController as LandingPagesController;
use App\Http\Controllers\Frontend\InstitutionController;
use App\Http\Controllers\Frontend\TeacherController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Frontend\LibraryController;
use App\Http\Controllers\Frontend\DivisionController;
use App\Http\Controllers\Frontend\DistrictController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\PartialController;
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


// landing page route
Route::get('/', [LandingPagesController::class, 'index'])->name('landing');
Route::get('/about', [LandingPagesController::class, 'about'])->name('about');

//dashboard
Route::group(['middleware'=>'auth'], function() {
  Route::get('/noipunno', [PagesController::class, 'noipunno'])->name('noipunno');
});

//institution
Route::group(['prefix'=>'institute','middleware'=>'auth'], function(){
  Route::get('/', [PagesController::class, 'index'])->name('index');
  Route::post('/institution-store', [InstitutionController::class, 'addInstution_store'])->name('institution_store');
  Route::get('/add_institution', [InstitutionController::class, 'add_institution'])->name('addInstitution');
  Route::get('/manage_institution', [InstitutionController::class, 'manageInstitution'])->name('manage_institution');
  Route::post('/update-institution/{id}', [InstitutionController::class, 'update'])->name('update.institution');
  Route::get('/manage-edit/{id}', [InstitutionController::class, 'editInstitution'])->name('edit.institution');
});


//student
Route::group(['prefix'=>'student','middleware'=>'auth'], function(){
  Route::get('/add_student', [StudentController::class, 'add_student'])->name('add_student');
  Route::get('/add_group', [StudentController::class, 'add_group'])->name('add_group');
  Route::post('/add-group-store', [StudentController::class, 'group_store'])->name('group_store');
  Route::post('/student_store', [StudentController::class, 'studentAdd'])->name('student_info_store');
  Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
  Route::get('/manageStudent', [StudentController::class, 'manageStudent'])->name('manageStudent');
  Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
  Route::post('/marks-store', [StudentController::class, 'marks_store'])->name('marks_store');
  Route::get('/seatPlan', [StudentController::class, 'seatPlan'])->name('seatPlan');
  Route::get('/search-single-result', [StudentController::class, 'search_result'])->name('searchResult');
  Route::get('/singleResult/{id}', [StudentController::class, 'single_result'])->name('singleResult');
});



// teacher
Route::group(['prefix'=>'teacher','middleware'=>'auth'], function(){
  Route::get('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
  Route::get('/manageTeacher', [TeacherController::class, 'manageTeacher'])->name('manageTeacher');
});
// search result
Route::group(['prefix'=>'search','middleware'=>'auth'], function(){
Route::get('/result', [SearchController::class, 'search_result'])->name('search.result');
Route::get('/result-show', [SearchController::class, 'search_result_show'])->name('search.result.show');
});



// API Route
Route::group(['middleware'=>'auth'], function() {
  Route::get('get-districts/{id}', function($id){
    return json_encode(App\Models\District::where('division_id', $id)->get());
  })->name('get-districts');
  Route::get('get-upazilas/{id}', function($id){
    return json_encode(App\Models\Upazila::where('district_id', $id)->get());
  });
  
  Route::get('get-institution/{id}', function($id){
    return json_encode(App\Models\Institution_info::where('upazila_id', $id)->get());
  });
});


// visitor route

Route::get('/visitor/{id}', [SearchController::class, 'visitor'])->name('visitor');


// Library
Route::group(['prefix'=>'library','middleware'=>'auth'], function() {
  Route::get('/', [LibraryController::class, 'index'])->name('library');
  Route::get('/add_book', [LibraryController::class, 'add_book'])->name('add_book');
  Route::get('/manage_books', [LibraryController::class, 'manage_books'])->name('manage_books');
  Route::get('/manage_category', [LibraryController::class, 'manage_category'])->name('manage_category');
  Route::get('/issue_book', [LibraryController::class, 'issue_book'])->name('issue_book');
  Route::get('/manage_issued_books', [LibraryController::class, 'manage_issued_books'])->name('manage_issued_books');
  Route::get('/create_library_card', [LibraryController::class, 'create_library_card'])->name('create_library_card');
  Route::get('/manage_library_card', [LibraryController::class, 'manage_library_card'])->name('manage_library_card');
});

// social, academy year, group controller
Route::group(['prefix'=>'social-media','middleware'=>'auth'], function(){
  Route::get('/', [PartialController::class, 'add_social'])->name('social_media');
  Route::post('/add-new', [PartialController::class, 'add_social_icon'])->name('add_social_media');
  
  Route::get('/manage', [PartialController::class, 'social_manage'])->name('manage_social_media');
});

// Authentication
Auth::routes();
