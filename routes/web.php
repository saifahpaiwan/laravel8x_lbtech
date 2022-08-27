<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartController;
use App\Http\Controllers\LoginController;
 
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/department-list', [DepartController::class, 'departmentlist'])->name('department.list'); 
Route::get('/store', [DepartController::class, 'store'])->name('store'); 
Route::post('/save', [DepartController::class, 'save'])->name('save'); 


// ======= //
Route::get('/login', [LoginController::class, 'login'])->name('login'); 
Route::post('/login-check', [LoginController::class, 'loginCheck'])->name('loginCheck'); 
Route::get('/home', [LoginController::class, 'home'])->name('home'); 
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); 