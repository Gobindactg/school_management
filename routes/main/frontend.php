<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\RouteController;

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





//institution
Route::group(['prefix'=>'institute'], function(){
  Route::get('/', [RouteController::class, 'index'])->name('index');
  Route::get('/add_institution', [RouteController::class, 'add_institution']);
  Route::get('/manage_institution', [RouteController::class, 'manage_institution']);
});


//student
Route::group(['prefix'=>'student'], function(){
  Route::get('/add_student', [RouteController::class, 'add_student']);
  Route::get('/admit', [RouteController::class, 'admit']);
  Route::get('/manageStudent', [RouteController::class, 'manageStudent']);
  Route::get('/marks', [RouteController::class, 'marks']);
  Route::get('/seatPlan', [RouteController::class, 'seatPlan']);
});



//teacher
Route::group(['prefix'=>'teacher'], function(){
  Route::get('/addTeacher', [RouteController::class, 'addTeacher']);
  Route::get('/manageTeacher', [RouteController::class, 'manageTeacher']);
});
