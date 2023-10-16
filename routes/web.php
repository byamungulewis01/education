<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::group(['middleware' => 'guest'], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
    Route::controller(AuthContoller::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::get('/register', 'register')->name('register');
    });
});

// Route::group(['middleware' => 'student'], function () {
    Route::controller(StudentController::class)->prefix('student')->name('student.')->group(function () {
        Route::get('/home', 'index')->name('index');
    });

// });


// Route::group(['middleware' => 'auth'], function () {
    Route::controller(AdminController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });

// });
