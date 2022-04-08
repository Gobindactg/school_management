<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\PagesController;
use App\Http\Controllers\Fontend\InstitutionController;
use App\Http\Controllers\Fontend\TeacherController;
use App\Http\Controllers\Fontend\StudentController;
use App\Http\Controllers\Fontend\DivisionController;
use App\Http\Controllers\Fontend\DistrictController;
use App\Http\Controllers\Fontend\SearchController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');

// Route Institution Controller
Route::get('/institution', [InstitutionController::class, 'addInstution'])->name('institution');
Route::post('/institution-store', [InstitutionController::class, 'addInstution_store'])->name('institution_store');
Route::get('/manage-institution', [InstitutionController::class, 'manageInstitution'])->name('manage.institution');
Route::get('/manage-edit/{id}', [InstitutionController::class, 'editInstitution'])->name('edit.institution');
Route::post('/update-institution/{id}', [InstitutionController::class, 'update'])->name('update.institution');

// Route Teacher Controller
Route::get('/teacher', [TeacherController::class, 'addTeacher'])->name('teacher');
Route::get('/manage-teacher', [TeacherController::class, 'manageTeacher'])->name('manage.teacher');

// Route Student Controller
Route::get('/student', [StudentController::class, 'addStudent'])->name('student');
Route::get('/manage-student', [StudentController::class, 'manageStudent'])->name('manage.student');
Route::get('/admit', [StudentController::class, 'admit'])->name('manage.admit');
Route::get('/seat-plan', [StudentController::class, 'seat_plan'])->name('manage.seat');
Route::get('/mark', [StudentController::class, 'mark'])->name('manage.mark');

// search result
Route::get('/search-result', [SearchController::class, 'search_result'])->name('search.result');
Route::get('/search-result-show', [SearchController::class, 'search_result_show'])->name('search.result.show');


// visitor route

Route::get('/visitor/{id}', [SearchController::class, 'visitor'])->name('visitor');


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