<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Api\TeacherController;
use App\Http\Controllers\Api\TeacherController;


Route::get('teachers',[TeacherController::class,'index']);
Route::get('teachers/show/{id}',[TeacherController::class,'show']);
Route::post('teachers/store',[TeacherController::class,'store']);
Route::post('teachers/update/{id}',[TeacherController::class,'update']);
Route::get('teachers/delete/{id}',[TeacherController::class,'delete']);