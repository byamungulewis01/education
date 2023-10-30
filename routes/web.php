<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConsultanceController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InstructorRegistration;
use App\Http\Controllers\TrainingController;

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
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/consultance', 'consultance')->name('consultance');
    Route::get('/training/{id}', 'training')->name('training');
    Route::get('/training/show/{id}', 'show')->name('show');
    Route::post('/training/{id}', 'filter')->name('filter');
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
        Route::get('/trainings', 'trainings')->name('trainings');
    });
    Route::controller(EnrollController::class)->prefix('enroll')->name('enroll.')->group(function () {
        Route::post('/free-course/{id}', 'free_course')->name('free_course');
        Route::post('/paid-course/{id}', 'paid_course')->name('paid_course');
    });
    Route::get('student/logout', [AuthContoller::class, 'logout'])->name('student.logout');
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index');
        Route::get('/profile', 'profile')->name('profile');
        Route::put('/changeProfile', 'changeProfile')->name('changeProfile');
        Route::put('/changePassword', 'changePassword')->name('changePassword');
    });

    Route::controller(CategoryController::class)->prefix('categories')->name('category.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(TrainingController::class)->prefix('trainings')->name('training.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/component/{id}', 'store_component')->name('store_component');
        Route::put('/component/{id}', 'update_component')->name('update_component');
        Route::delete('/component/{id}', 'destroy_component')->name('destroy_component');
    });

    Route::controller(ConsultanceController::class)->prefix('consultances')->name('consultance.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });


    Route::controller(AdminStudentController::class)->prefix('students')->name('student.')->group(function () {
        Route::get('/approved', 'approved')->name('approved');
        Route::put('/approved/{id}', 'approve')->name('approve');
        Route::get('/rejected', 'rejected')->name('rejected');
        Route::put('/reject/{id}', 'reject')->name('reject');
        Route::get('/application', 'application')->name('application');
    });



    Route::controller(InstructorRegistration::class)
        ->prefix('instructors')->name('instructor.')
        // ->middleware('user-access:admin')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{id}', 'update')->name('update');
            Route::delete('/{id}', 'destroy')->name('destroy');
        });

    Route::controller(UsersController::class)->middleware('user-access:super_admin')->prefix('users')->name('user.')->group(function () {
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
Route::group(['middleware' => 'auth', 'prefix' => 'instructor', 'as' => 'instructor.'], function () {
    Route::controller(InstructorController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index');
        Route::get('/trainings', 'trainings')->name('trainings');
        Route::get('/students', 'students')->name('students');
    })->middleware('user-access:instructor');
});
