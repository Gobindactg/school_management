<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Landing\PagesController as LandingPagesController;
use App\Http\Controllers\Frontend\InstitutionController;
use App\Http\Controllers\Frontend\SubjectController;
use App\Http\Controllers\Frontend\TeacherController;
use App\Http\Controllers\Frontend\StudentController;
use App\Http\Controllers\Frontend\LibraryController;
use App\Http\Controllers\Frontend\DivisionController;
use App\Http\Controllers\Frontend\DistrictController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\PartialController;
use App\Http\Controllers\Frontend\RoutineController;
use App\Http\Controllers\Auth\RegisterController;
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

//testing route, will delete later
Route::get('/test', function () {
  return view('Frontend.pages.Institution.test');
});


// landing page route
Route::get('/', [LandingPagesController::class, 'index'])->name('landing');
Route::get('/about', [LandingPagesController::class, 'about'])->name('about');


//dashboard
Route::group(['middleware' => 'auth'], function () {
  Route::get('/noipunno', [PagesController::class, 'noipunno'])->name('noipunno');

  //route for new User
  Route::group(['middleware' => 'newUser'], function () {
    Route::get('/getting_started', [PagesController::class, 'get_started'])->name('getStarted');
    Route::get('/join', [PagesController::class, 'join_institution'])->name('join_institution');

    
    Route::post('/institution_list', [PagesController::class, 'institution_list'])->name('institution_list');
    Route::post('/apply_job', [PagesController::class, 'apply_job'])->name('apply_job');
  });

  Route::get('/pending', [PagesController::class, 'pending'])->name('pending')->middleware('pendingUser');
});

//institution
Route::group(['prefix' => 'institute', 'middleware' => 'auth'], function () {

  // this routes can be access by the new users
  Route::group(['middleware' => 'newUser'], function () {
    Route::get('/add_institution', [InstitutionController::class, 'add_institution'])->name('addInstitution');
    Route::post('/institution-store', [InstitutionController::class, 'addInstution_store'])->name('institution_store');
  });

  // for Institution Administrations
  Route::group(['middleware' => 'institutionAdmin'], function () {
    Route::get('/manage', [InstitutionController::class, 'editInstitution'])->name('edit.institution');
    Route::post('/update-institution/{id}', [InstitutionController::class, 'update'])->name('update.institution');
  });

  // For The Application Administrations
  Route::get('/manage_institution', [InstitutionController::class, 'manageInstitution'])->name('manage_institution')->middleware('sysAdmin');
});


//student
Route::group(['prefix' => 'student', 'middleware' => ['auth', 'institutionAdmin']], function () {
  Route::get('/add_student', [StudentController::class, 'add_student'])->name('add_student');
  Route::get('/add_group', [StudentController::class, 'add_group'])->name('add_group');
  Route::post('/add-group-store', [StudentController::class, 'group_store'])->name('group_store');
  Route::post('/student_store', [StudentController::class, 'studentAdd'])->name('student_info_store');
  Route::get('/manageStudent', [StudentController::class, 'manageStudent'])->name('manageStudent');
  Route::get('/singleResult/{id}', [StudentController::class, 'single_result'])->name('singleResult');

    // routine controller
    Route::get('/manage-routine', [RoutineController::class, 'manage_routine'])->name('manage_routine');
    Route::post('/manage-store', [RoutineController::class, 'routine_store'])->name('routine_store');
    Route::get('/routine/delete/{id}', [RoutineController::class, 'routine_delete'])->name('routine_delete');
});

//exams
Route::group(['prefix' => 'exam', 'middleware' => ['auth', 'institutionAdmin']], function () {
  Route::get('/admit', [StudentController::class, 'admit'])->name('admit');
  Route::get('/seatPlan', [StudentController::class, 'seatPlan'])->name('seatPlan');
  Route::get('/marks', [StudentController::class, 'marks'])->name('marks');
  Route::post('/marks-store', [StudentController::class, 'marks_store'])->name('marks_store');
  Route::get('/search-single-result', [StudentController::class, 'search_result'])->name('searchResult');
  Route::get('/singleResult/{id}', [StudentController::class, 'single_result'])->name('singleResult');

  // search
  Route::get('/search-student', [StudentController::class, 'search_student'])->name('search.student');
  Route::get('/search-mark', [StudentController::class, 'search_mark'])->name('search.mark');

  
  Route::post('/search-admit', [StudentController::class, 'search_admit'])->name('search.admit');
});


//subject
Route::group(['prefix' => 'subjects', 'middleware' => ['auth']], function () {
  Route::get('/addSubject', [SubjectController::class, 'addSubject'])->name('addSubject');
  Route::get('/manageSubject', [SubjectController::class, 'manageSubject'])->name('manageSubject');


  Route::post('/addSubject', [SubjectController::class, 'saveSubject'])->name('saveSubject');
  Route::post('/deleteSubject', [SubjectController::class, 'deleteSubject'])->name('deleteSubject');
});



// teacher
Route::group(['prefix' => 'teacher', 'middleware' => ['auth', 'institutionAdmin']], function () {
  Route::get('/addTeacher', [TeacherController::class, 'addTeacher'])->name('addTeacher');
  Route::get('/manageTeacher', [TeacherController::class, 'manageTeacher'])->name('manageTeacher');
  
  
  Route::post('/approveTeacher', [TeacherController::class, 'approveTeacher'])->name('approveTeacher');
  Route::post('/removeTeacher', [TeacherController::class, 'removeTeacher'])->name('removeTeacher');
});

// search result
Route::group(['prefix' => 'search', 'middleware' => ['auth', 'sysAdmin']], function () {
  Route::get('/result', [SearchController::class, 'search_result'])->name('search.result');
  Route::get('/result-show', [SearchController::class, 'search_result_show'])->name('search.result.show');
  Route::get('/result-show-division', [SearchController::class, 'search_result_division'])->name('search.result.division');
});

// social, academy year, group controller
Route::group(['prefix' => 'social-media', 'middleware' => ['auth', 'institutionAdmin']], function () {
  Route::get('/', [PartialController::class, 'add_social'])->name('social_media');
  Route::post('/add-new', [PartialController::class, 'add_social_icon'])->name('add_social_media');

  Route::get('/manage', [PartialController::class, 'social_manage'])->name('manage_social_media');
});



// API Route (for divistions, districts, subdistricts and institutions)
Route::group(['middleware' => 'auth'], function () {
  Route::get('get-districts/{id}', function ($id) {
    return json_encode(App\Models\District::where('division_id', $id)->get());
  })->name('get-districts');
  Route::get('get-upazilas/{id}', function ($id) {
    return json_encode(App\Models\Upazila::where('district_id', $id)->get());
  });
  Route::get('get-institution/{id}', function ($id) {
    return json_encode(App\Models\Institution_info::where('upazila_id', $id)->get());
  });
});


// visitor route
Route::get('/visitor/{id}', [SearchController::class, 'visitor'])->name('visitor');
Route::get('/search-seatplan', [SearchController::class, 'search_seatplan'])->name('search.seatplan');


// Library
Route::group(['prefix' => 'library', 'middleware' => ['auth', 'librarian']], function () {
  Route::get('/', [LibraryController::class, 'index'])->name('library');
  Route::get('/add_book', [LibraryController::class, 'add_book'])->name('add_book');
  Route::get('/manage_books', [LibraryController::class, 'manage_books'])->name('manage_books');
  Route::get('/manage_category', [LibraryController::class, 'manage_category'])->name('manage_category');
  Route::get('/issue_book', [LibraryController::class, 'issue_book'])->name('issue_book');
  Route::get('/manage_issued_books', [LibraryController::class, 'manage_issued_books'])->name('manage_issued_books');
  Route::get('/create_library_card', [LibraryController::class, 'create_library_card'])->name('create_library_card');
  Route::get('/manage_library_card', [LibraryController::class, 'manage_library_card'])->name('manage_library_card');


  // storing routes
  Route::post('/store_new_book', [LibraryController::class, 'store_book'])->name('store_book');
  Route::post('/store_category', [LibraryController::class, 'store_category'])->name('library_store_category');
  Route::post('/delete_category', [LibraryController::class, 'delete_category'])->name('library_delete_category');
});


// messages
Route::group(['prefix' => 'message', 'middleware' => 'auth'], function () {
  Route::post('/', [PartialController::class, 'message'])->name('message');
  Route::get('/read/{id}', [PartialController::class, 'read_message'])->name('message_read');
  Route::get('/show-all-message', [PartialController::class, 'show_message'])->name('show_message');
});

// Authentication
Auth::routes();

// new user registration
Route::post('/register', [RegisterController::class, 'create'])->name('registered');
