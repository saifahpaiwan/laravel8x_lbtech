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

Route::get('/forget-password', [AuthenticationController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [AuthenticationController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [AuthenticationController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [AuthenticationController::class, 'submitResetPasswordForm'])->name('reset.password.post');