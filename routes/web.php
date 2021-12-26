<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;

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



// Route::get('/', function () {
//     return view('welcome');
// });
