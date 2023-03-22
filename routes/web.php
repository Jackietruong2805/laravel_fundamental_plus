<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Calculate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentController::class, 'all']);  
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('trashed', [StudentController::class, 'trashed']);
Route::get('restore/{id}', [StudentController::class, 'restore']);
Route::get('force-delete/{id}', [StudentController::class, 'force_delete']);
Route::get('check/{mark}', [Calculate::class, 'get_result']);
