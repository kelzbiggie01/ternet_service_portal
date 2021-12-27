<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;

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
Route::get('showservices',[FrontEndController::class,'showServices']);
Route::get('showdepartment',[FrontEndController::class,'showDepartment']);
Route::post('login',[FrontEndController::class,'login'])->name('login');


//cant access this links without login
Route::middleware("auth")->group(function(){
Route::post('logout',[FrontEndController::class,'logout'])->name('logout');

Route::get('backendservices',[ServiceController::class,'getBackendHome']);
Route::get('servicescreate',[ServiceController::class,'create']);
Route::post('services',[ServiceController::class,'store'])->name("services.store");

Route::get('departments',[DepartmentController::class,'index']);
Route::get('departments/create',[DepartmentController::class,'create']);
Route::post('departments',[DepartmentController::class,'store']);
Route::get('departments/{id}/edit',[DepartmentController::class,'edit']);
Route::get('departments/{id}',[DepartmentController::class,'show']);
Route::put('departments/update/{id}',[DepartmentController::class,'update'])->name("departments.update");//named route

});


// Route::get('/', function () {
//     return view('welcome');
// });
