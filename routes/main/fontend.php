<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fontend\PagesController;
use App\Http\Controllers\Fontend\InstitutionController;
use App\Http\Middleware\DatabaseCheck;

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





// // Route Institution Controller
// Route::get('/institution', [InstitutionController::class, 'addInstution'])->name('institution');
// Route::get('/manage-institution', [InstitutionController::class, 'manageInstitution'])->name('manage.institution');

// // Route Teacher Controller
// Route::get('/teacher', [InstitutionController::class, 'addTeacher'])->name('teacher');
// Route::get('/manage-teacher', [InstitutionController::class, 'manageTeacher'])->name('manage.teacher');
