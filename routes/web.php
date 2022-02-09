<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

//* for landing poge
Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/home', [AdminController::class, 'index']);
Route::get('/logout', [AdminController::class, 'index']);

//* check
Route::get('/posts', [AdminController::class, 'post_id']);

//* for login / logout system
Route::get('/register', [RegisterController::class, 'index'])->name('register'); //? signup user page
Route::post('/register', [RegisterController::class, 'store']); //? store in db after signup
Route::get('/login', [LoginController::class, 'index'])->name('login'); //? login user page
Route::post('/login', [LoginController::class, 'store']); //? validate if the user has account
Route::post('/logout', [LogoutController::class, 'store'])->name('logout'); //? logout the user
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard'); //? go to dashboard

//* for creating posts
// Route::get('/admin', [AdminController::class, 'index'])->name('admin'); //? render the index file
Route::get('/user_posts', [AdminController::class, 'retrieve_data']); //? for retrieve data to render in index file
Route::post('/insert_data', [AdminController::class, 'insert_data']); //? insert data in db
Route::post('/update_data', [AdminController::class, 'update_data']); //? update data in db
Route::post('/delete_data', [AdminController::class, 'delete_data']); //? delete a data
Route::get('/data_count', [AdminController::class, 'count_data']); //? data count
//! Route::get('/role_select', [AdminController::class, 'role_select']); //? get the roles