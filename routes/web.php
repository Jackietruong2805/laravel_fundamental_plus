<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('students', [StudentController::class, 'all']);  
Route::get('delete/{id}', [StudentController::class, 'delete']);
Route::get('trashed', [StudentController::class, 'trashed']);
Route::get('restore/{id}', [StudentController::class, 'restore']);
