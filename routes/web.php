<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\ConsultanceController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\InstructorRegistration;
use App\Http\Controllers\AccreditationController;
use App\Http\Controllers\StudentProfileController;

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
    Route::get('/consultancy', 'consultancy')->name('consultancy');
    Route::get('/consultancy/{id}', 'consultancyShow')->name('consultancyShow');
    Route::get('/trainings', 'trainings')->name('trainings');
    Route::get('/trainings/{id}', 'training')->name('training');
    Route::get('/school/{id}', 'show_school')->name('show_school');
    Route::get('/admission/{id}', 'admission')->name('admission');
    Route::get('/contact-us', 'contact')->name('contact');
    Route::get('/accreditations', 'accreditations')->name('accreditations');
    Route::get('/accreditations/{id}', 'show_accreditation')->name('show_accreditation');
});
Route::controller(AuthContoller::class)->group(function () {
    Route::post('/login', 'login_auth')->name('login_auth');
    Route::post('/register/{id}', 'register_auth')->name('register_auth');

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
        Route::put('/changeProfile', 'changeProfile')->name('changeProfile');
        Route::get('/my-dashboard', 'dashboard')->name('dashboard');
        Route::get('/my-trainings', 'trainings')->name('trainings');
        Route::get('/my-notifications', 'notifications')->name('notifications');
        Route::get('/my-trainings/{id}', 'training_show')->name('training_show');
        Route::get('/my-marking_scheme/{id}', 'marking_scheme')->name('marking_scheme');
        Route::get('/chat/{id}', 'chat')->name('chat');
        Route::post('/chat/{id}', 'storeChat')->name('storeChat');
        Route::get('/my-trainings-exam/{id}', 'training_exam_show')->name('training_exam_show');
        Route::post('/my-trainings-exam/{id}', 'trainingExam')->name('trainingExam');
        Route::post('/my-trainings-retake/{id}', 'trainingRetake')->name('trainingRetake');
        Route::get('/retake-callback/{id}', 'trainingRetakeCallback')->name('trainingRetakeCallback');

        Route::post('/my-trainings-pay/{id}', 'trainingPay')->name('trainingPay');
        Route::get('/trainingPay-callback/{id}', 'trainingPayCallback')->name('trainingPayCallback');

        Route::post('/my-trainings-book/{id}', 'bookTraining')->name('bookTraining');
        Route::get('/admission/{id}', 'admission')->name('admission');
        Route::get('/certificate/{id}', 'certificate')->name('certificate');
        Route::post('certificateByYear/{id}', 'certificate_by_year')->name('certificate_by_year');

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
        Route::get('/chat', 'chat')->name('chat');
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
    Route::controller(PagesController::class)->middleware('user-access:admin,super_admin')->prefix('pages')->name('pages.')->group(function () {
        Route::get('/about-us', 'about')->name('about');
        Route::put('/about-us', 'aboutUpdate')->name('aboutUpdate');
        Route::put('/about-us/mission', 'aboutMissionUpdate')->name('aboutMissionUpdate');
        Route::get('/contact-us', 'contact')->name('contact');
        Route::put('/contact-us', 'contactUpdate')->name('contactUpdate');
        Route::get('/home-banners', 'home_banners')->name('home_banners');
        Route::post('/home-banners', 'store_home_banner')->name('store_home_banner');
        Route::put('/home-banners/{id}', 'update_home_banner')->name('update_home_banner');
        Route::delete('/home-banners/{id}', 'destroy_home_banner')->name('destroy_home_banner');

        // Organization Structure
        Route::get('/structure', 'structure')->name('structure');
        Route::get('/structure/create', 'create_structure')->name('create_structure');
        Route::get('/structure/{id}/edit', 'edit_structure')->name('edit_structure');
        Route::post('/structure', 'store_structure')->name('store_structure');
        Route::put('/structure/{id}', 'update_structure')->name('update_structure');
        Route::delete('/structure/{id}', 'destroy_structure')->name('destroy_structure');

    });

    Route::controller(TrainingController::class)->prefix('trainings')->name('training.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{id}/students', 'students')->name('students');
        Route::get('/marking-scheme/{id}', 'marking_scheme')->name('marking_scheme');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/category/{id}', 'category')->name('category');

        Route::post('/question/{id}', 'store_question')->name('store_question');
        Route::put('/question/{id}', 'update_question')->name('update_question');
        Route::delete('/question/{id}', 'destroy_question')->name('destroy_question');

        Route::put('/activate_exam/{id}', 'activate_exam')->name('activate_exam');
        Route::put('/disactivate_exam/{id}', 'disactivate_exam')->name('disactivate_exam');
    });

    Route::controller(ModuleController::class)->prefix('module')->name('module.')->group(function () {
        Route::post('/{id}', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(ConsultanceController::class)->prefix('consultances')->name('consultance.')->middleware('user-access:admin,super_admin')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/', 'store')->name('store');
        Route::put('/{id}', 'update')->name('update');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    Route::controller(AccreditationController::class)->prefix('accreditations')->name('accreditation.')->middleware('user-access:admin,super_admin')->group(function () {
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
    Route::controller(StudentProfileController::class)->prefix('student')->middleware('user-access:admin,super_admin')->name('student.profile.')->group(function () {
        Route::get('/{id}', 'index')->name('index');
        Route::put('/changePassword/{id}', 'changePassword')->name('changePassword');
        Route::get('/training/{id}', 'training')->name('training');
        Route::put('/training/{id}', 'training_joining')->name('training_joining');

    });
    Route::get('student/admission/{id}', [StudentController::class, 'admission'])->name('admission');
    Route::get('student/certificate/{id}', [StudentController::class, 'certificate'])->name('certificate');
    Route::post('student/certificateByYear/{id}', [StudentController::class, 'certificate_by_year'])->name('certificate_by_year');

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

    Route::controller(UsersController::class)->prefix('students')->name('student.')->group(function () {
        Route::get('/', 'students')->name('index');
        Route::post('/', 'store_student')->name('store');
        Route::put('/{id}', 'update_student')->name('update');
        Route::delete('/{id}', 'destroy_student')->name('destroy');
    });

    Route::controller(UsersController::class)->prefix('clients')->name('client.')->group(function () {
        Route::get('/', 'clients')->name('index');
        Route::post('/', 'store_client')->name('store');
        Route::put('/{id}', 'update_client')->name('update');
        Route::delete('/{id}', 'destroy_client')->name('destroy');
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
        Route::get('/chat/{id}', 'chat')->name('chat');
        Route::post('/chat/{id}', 'storeChat')->name('storeChat');
    });
    Route::get('training/{id}', [TrainingController::class, 'show'])->name('training.show');
})->middleware('user-access:instructor');
