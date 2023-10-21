<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\InstructorController;

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

// Route::group(['middleware' => 'guest'], function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/instructors', 'instructor')->name('instructor');
        Route::get('/school/{id}', 'school')->name('school');
        Route::post('/school/{id}', 'filter')->name('filter');
    });
    Route::controller(AuthContoller::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'login_auth')->name('login_auth');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'register_auth')->name('register_auth');
    });
    Route::controller(AdminAuthController::class)->prefix('admin')->name('admin.')->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'login_auth')->name('login_auth');
    });
// });

Route::group(['middleware' => 'student'], function () {
    Route::controller(StudentController::class)->prefix('student')->name('student.')->group(function () {
        Route::get('/home', 'index')->name('index');
        Route::get('/profile', 'profile')->name('profile');
    });
    Route::get('student/logout', [AuthContoller::class, 'logout'])->name('student.logout');
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });


    Route::controller(SchoolController::class)->prefix('schools')->name('school.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(ProgramController::class)->prefix('programs')->name('program.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(CourseController::class)->prefix('courses')->name('course.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(InstructorController::class)->prefix('instructors')->name('instructor.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(UsersController::class)->middleware('user-access:admin')->prefix('users')->name('user.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });


    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('403', function () {
        return view('errors.403');
    })->name('403');
});
