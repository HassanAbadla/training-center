<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AppliedController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Course;
use App\Applied;
use App\Employee;
use App\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('main');
});

// Signup Form - Show Courses in selection
Route::get('/applied', [AppliedController::class, 'courseSelect']);
// Signup Form save data
Route::post('/success', [AppliedController::class, 'store']);
route::get('/success', function () {
    return view('success');
});

// Adding & Showing Courses
Route::get('/addCourse',[CourseController::class,'index'])->middleware('auth');
Route::delete('/addCourses/{id}',[CourseController::class,'destroy'])->middleware('auth');
Route::post('/addCourse', [CourseController::class,'store'])->middleware('auth');

//DASHBOARD - MAIN
// Route::get('/dashboard', function() {
//     return view('dashboard.mainboard');
// });

//////////////

// Dashboard - Applied Students
Route::get('/students', function () {
    return view('students')->middleware('auth');
});



Route::get('/students', [AppliedController::class, 'index'])->middleware('auth');
Route::get('/studinfo', [AppliedController::class, 'index'])->middleware('auth');

Route::get('/studinfo/{id}', [DashboardController::class, 'edit']);

Route::get('/studinfo/{id}', [AppliedController::class, 'edit']);
Route::put('/updateinfo/{id}', [AppliedController::class, 'update']);
Route::delete('/deletestudent/{id}', [AppliedController::class, 'destroy']);

// Dashboard - Employees
Route::get('/add-employees', function () {
    return view('adding.addEmp')->middleware('auth');
});

Route::post('/add-employees', [EmployeeController::class, 'store']);
Route::get('/employees', [EmployeeController::class, 'index'])->middleware('auth');

Route::get('/empEdit/{id}', [EmployeeController::class, 'edit']);
Route::put('/updateemp/{id}', [EmployeeController::class, 'update']);
Route::delete('/deleteemp/{id}',[EmployeeController::class,'destroy']);

// Dashboard - CMS: All Posts
Route::get('/dashboard/content', function () {
    return view('dashboard.cm')->middleware('auth')('auth');
});

// New Post
Route::get('/dashboard/newpost', function(){
    return view('adding.addPost')->middleware('auth')('auth');
});

Auth::routes();
Route::get('/dashboard', [DashboardController::class, 'teachersInfo'])->middleware('auth');
// Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

