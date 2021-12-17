<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\userController;
use App\Http\Controllers\UserUpdateController;
use App\Http\Controllers\UserDeleteController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form',function(){
    return view('form');
});
Route::post('/form',function(){
    $employee = new employee();
    $employee->name = request('Name');
    $employee->phone = request('Phone');
    $employee->email = request('Email');
    $employee->language = request('language');
    $employee->gender = request('Gender');
    $employee->decription = request('Description');
    $employee->save();
});
Route::get("/main",[userController::class,'index']);
Route::get('edit/{id}',[UserUpdateController::class,'show']);
Route::post('edit/{id}',[UserUpdateController::class,'edit']);
Route::get('delete/{id}',[UserDeleteController::class,'destroy']);

