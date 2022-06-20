<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AddController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RgeController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\AboutschoolController;
use App\Http\Controllers\Frontend\ConnectController;
use App\Http\Controllers\Backend\AnousmentController;

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

//connect page view
Route::get('/student/connect',[ConnectController::class,'index'])->name('student.connect');

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



