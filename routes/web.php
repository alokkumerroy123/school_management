<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AddController;
use App\Http\Controllers\Backend\RoutinController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RgeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AboutschoolController;
use App\Http\Controllers\Frontend\ConnectController;
use App\Http\Controllers\Backend\AnousmentController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Frontend\ChangePassword;

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

//frontend
Route::get('/',[HomeController::class,'index'])->name('home');
//about school page view
Route::get('/abou/school',[AboutschoolController::class,'index'])->name('about.school');

//login page view
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'login']);

//registration
Route::get('rge',[RgeController::class,'index'])->name('rge');
Route::post('rge',[RgeController::class,'dorge']);
  

Route::middleware('auth')->group(function(){

//show routin
Route::get('/show/routin',[UserController::class,'routin'])->name('student.routin');
//connect page view
Route::get('/student/connect',[ConnectController::class,'index'])->name('student.connect');
//connect page data submit
Route::post('/student/connect',[ConnectController::class,'connect']);

//student see teacher list
Route::get('/teacherlist',[UserController::class,'index'])->name('teacher.list');
//notic page show
Route::get('/school/notic',[UserController::class,'notic'])->name('school.notic');

//student profile show
Route::get('/student/profile',[UserController::class,'student'])->name('student.profile');
//profile deit
Route::post('/student/profile',[UserController::class,'update']);
//logout route
Route::get('logout',[LoginController::class,'logout'])->name('logout');



Route::middleware('IsAdmin')->prefix('dashboard')->group(function(){
    
    //add student view route
    Route::get('student',[StudentController::class,'index'])->name('student.list');
    //submit student info
    Route::post('student',[StudentController::class,'about']);
  
    

//Routin
//admin show routin 
Route::get('/routin',[RoutinController::class,'index'])->name('routin');
//add routin
Route::get('/add/routin',[RoutinController::class,'routin'])->name('add.routin');
Route::post('/add/routin',[RoutinController::class,'upload']);
//delete routin
Route::get('/routin/{id}/delete',[RoutinController::class,'delete'])->name('delete.routin');

//admin delete message
Route::get('show/{id}/delete',[ConnectController::class,'delete'])->name('message.delete');
//show student message
Route::get('show/message',[ConnectController::class,'message'])->name('show.message');
//anousment page view
Route::get('/anousment',[AnousmentController::class,'index'])->name('anousment');
//add new anousment page view
Route::get('add/anousment',[AnousmentController::class,'anousment'])->name('add.anousment');
Route::post('add/anousment',[AnousmentController::class,'input']);
//anousment page edit
Route::get('edit/{id}/anousment',[AnousmentController::class,'edit'])->name('anousment.edit');
Route::post('edit/{id}/anousment',[AnousmentController::class,'update']);
//anousment delete
Route::get('anousment/{id}/delete',[AnousmentController::class,'delete'])->name('anousment.delete');


//backend
//view admin dashboard page
Route::get('/',[DashboardController::class,'index'])->name('dashboard');
//view add teacher page
Route::get('/teacher',[AddController::class,'index'])->name('admin.teacher');
//view add new teacher page
Route::get('/teacher/add',[AddController::class,'teacher'])->name('new.teacher');
//teacher data add in database
Route::post('/teacher/add',[AddController::class,'addteacher']);
//teacher data edit page view
Route::get('/teacher/{id}/edit',[AddController::class,'edit'])->name('admin.edit');
//teacher edit data store in database
Route::post('/teacher/{id}/edit',[AddController::class,'update']);
//teacher data delete
Route::get('/teacher/{id}/delete',[AddController::class,'delete'])->name('admin.delete');

    });
});



