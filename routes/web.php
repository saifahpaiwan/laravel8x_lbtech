<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
 
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/department-list', [DepartController::class, 'departmentlist'])->name('department.list'); 
Route::get('/store', [DepartController::class, 'store'])->name('store'); 
Route::post('/save', [DepartController::class, 'save'])->name('save'); 