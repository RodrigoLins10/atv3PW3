<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/takein', [TakeinController::class, 'inicial']);
Route::get('/takein/signin', [SignInController::class]);
Route::get('/takein/singup', [SignUpController::class]);
Route::get('/takein/home',[HomeController::class]);
Route::get('/takein/userpage', [UserController::class]);
