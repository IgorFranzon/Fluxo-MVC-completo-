<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;

Route::get('/setor', [DepartmentController::class, 'index']);
Route::get('/funcionarios', [EmployeeController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
