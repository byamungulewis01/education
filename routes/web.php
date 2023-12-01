<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ConsultanceController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\InstructorRegistration;

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
    Route::get('/consultancy/{id}', 'consultancy')->name('consultancy');
    Route::get('/training/{id}', 'training')->name('training');
    Route::get('/training/show/{id}', 'show')->name('show');
});
Route::controller(AuthContoller::class)->group(function () {
    Route::post('/login', 'login_auth')->name('login_auth');
    Route::post('/register', 'register_auth')->name('register_auth');

    Route::post('/client_login', 'client_login_auth')->name('client_login_auth');
    Route::post('/client_register', 'client_register_auth')->name('client_register_auth');
});
Route::controller(AdminAuthController::class)->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'login_auth')->name('login_auth');
});
// });

Route::group(['middleware' => 'student'], function () {
    Route::controller(StudentController::class)->prefix('student')->name('student.')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/my-trainings', 'trainings')->name('trainings');
        Route::get('/my-trainings/{id}', 'trainingShow')->name('trainingShow');
        Route::get('/my-trainings-exam/{id}', 'training_exam_show')->name('training_exam_show');
        Route::post('/my-trainings-exam/{id}', 'trainingExam')->name('trainingExam');
    });
    Route::controller(EnrollController::class)->prefix('enroll')->name('enroll.')->group(function () {
        Route::post('/free-course/{id}', 'free_course')->name('free_course');
        Route::post('/paid-course/{id}', 'paid_course')->name('paid_course');
    });
    Route::get('student/logout', [AuthContoller::class, 'logout'])->name('student.logout');
});


Route::group(['middleware' => 'client'], function () {
    Route::controller(ClientController::class)->prefix('client')->name('client.')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/my_consultancy', 'my_consultancy')->name('my_consultancy');
        Route::post('/consultancy/apply/{id}', 'consultancy_apply')->name('consultancy_apply');
    });
    Route::get('client/logout', [AuthContoller::class, 'client_logout'])->name('client.logout');
});


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index')->middleware('user-access:admin,super_admin');
        Route::get('/profile', 'profile')->name('profile');
        Route::put('/changeProfile', 'changeProfile')->name('changeProfile');
        Route::put('/changePassword', 'changePassword')->name('changePassword');
    });

    Route::controller(CategoryController::class)->middleware('user-access:admin,super_admin')->prefix('categories')->name('category.')->group(function () {
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
        Route::post('/question/{id}', 'store_question')->name('store_question');
        Route::put('/question/{id}', 'update_question')->name('update_question');
        Route::delete('/question/{id}', 'destroy_question')->name('destroy_question');

        Route::put('/activate_exam/{id}', 'activate_exam')->name('activate_exam');
        Route::put('/disactivate_exam/{id}', 'disactivate_exam')->name('disactivate_exam');
    });

    Route::controller(ConsultanceController::class)->prefix('consultances')->name('consultance.')->middleware('user-access:admin,super_admin')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });


    Route::controller(AdminStudentController::class)->prefix('students')->middleware('user-access:admin,super_admin')->name('student.')->group(function () {
        Route::get('/approved', 'approved')->name('approved');
        Route::put('/approved/{id}', 'approve')->name('approve');
        Route::get('/rejected', 'rejected')->name('rejected');
        Route::put('/reject/{id}', 'reject')->name('reject');
        Route::get('/application', 'application')->name('application');
    });

    Route::controller(InstructorRegistration::class)
        ->prefix('instructors')->name('instructor.')
        ->middleware('user-access:admin,super_admin')
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
    });
    Route::get('training/{id}', [TrainingController::class, 'show'])->name('training.show');
})->middleware('user-access:instructor');
