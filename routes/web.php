<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserController;
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

Route::get('/',[FrontEndController::class,'getHomePage']);
Route::get('services',[FrontEndController::class,'getServices']);
Route::get('contact_us',[FrontEndController::class,'getContact_us']);
Route::get('login',[FrontEndController::class,'getLogin']);
//Route::get('showservices',[FrontEndController::class,'showServices']);
Route::get('showservices/{id}/showservices',[FrontEndController::class,'showServices']);
Route::get('showdepartment/{id}',[FrontEndController::class,'showDepartment']);
Route::post('login',[FrontEndController::class,'login'])->name('login');


//cant access this links without login
Route::middleware("auth")->group(function(){
Route::post('logout',[FrontEndController::class,'logout'])->name('logout');

Route::get('backendservices',[ServiceController::class,'getBackendHome']);
Route::get('servicescreate',[ServiceController::class,'create']);
Route::post('services',[ServiceController::class,'store'])->name("services.store");
Route::get('servicesshow/{id}/show',[ServiceController::class,'show'])->name("service.show");
Route::get('services/{id}/edit',[ServiceController::class,'edit']);
Route::put('services/update/{id}',[ServiceController::class,'update'])->name("services.update");

Route::get('departments',[DepartmentController::class,'index']);
Route::get('departments/create',[DepartmentController::class,'create']);
Route::post('departments',[DepartmentController::class,'store']);
Route::get('departments/{id}/edit',[DepartmentController::class,'edit']);
Route::get('departments/{id}',[DepartmentController::class,'show']);
Route::put('departments/update/{id}',[DepartmentController::class,'update'])->name("departments.update");//named route

Route::get('statuses',[StatusController::class,'index']);
Route::get('statuses/{id}',[StatusController::class,'show']);
Route::get('statuses/{id}/edit',[StatusController::class,'edit']);
Route::put('statuses/update/{id}',[StatusController::class,'update'])->name("statuses.update");
Route::get('statusescreate',[StatusController::class,'create']);
Route::post('statuses',[StatusController::class,'store']);

Route::get('users',[UserController::class,'index']);
Route::get('users/create',[UserController::class,'create']);
Route::post('users',[UserController::class,'store']);
Route::get('users/{id}/edit',[UserController::class,'edit']);
Route::put('users/update/{id}',[UserController::class,'update'])->name("users.update");
Route::get('users/{id}',[UserController::class,'show']);
});

