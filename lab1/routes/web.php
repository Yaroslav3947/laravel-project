<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/lab1', [LabController::class, 'index']);
Route::get('/about', [LabController::class, 'about'])->middleware('check.age');
Route::get('/contact', [LabController::class, 'contact']);
Route::get('/hobbies', [LabController::class, 'hobbies']);