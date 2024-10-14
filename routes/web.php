<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AppointmentController;


Route::get('/', [Controller::class, 'index'])->name('website');


Route::middleware(AdminMiddleware::class)->group(function () {
    // Dashboard
    Route::get('/admin/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard/appointments', [Controller::class, 'dashappointment'])->name('dashboardappointment');
    Route::get('/admin/dashboard/admins', [Controller::class, 'admin'])->name('admin');

    // Department CRUD
    Route::get('/department/add', [DepartmentController::class, 'index'])->name('department.add');
    Route::post('/department/add', [DepartmentController::class, 'store']);
    Route::get('/department/show', [DepartmentController::class, 'show'])->name('department.show');
    Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
    Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');

    // User CRUD
    Route::get('/user/showusers', [WebController::class, 'show'])->name('user.show');
    Route::get('/user/delete/{id}', [WebController::class, 'destroy'])->name('user.delete');
    Route::get('user/edit/{id}', [WebController::class, 'edit'])->name('user.edit'); // To display the edit form
    Route::post('user/update/{id}', [WebController::class, 'update'])->name('user.update');

    // Conatct CRUD

    Route::get('/contact/show', [ContactController::class, 'show'])->name('contact.show');
    Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit'); // To display the edit form
    Route::patch('contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');

    // Doctor CRUD

    Route::get('/doctor/add', [DoctorController::class, 'index'])->name('doctor.add');
    Route::post('/doctor/add', [DoctorController::class, 'store']);
    Route::get('/doctor/show', [DoctorController::class, 'show'])->name('doctor.show');
    Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
    Route::patch('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
    Route::get('/doctor/delete/{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');

    // Appointment CRUD
    Route::get('/appointment/show', [AppointmentController::class, 'show'])->name('appointment.show');
    Route::get('appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('appointment.edit'); // To display the edit form
    Route::patch('appointment/update/{id}', [AppointmentController::class, 'update'])->name('appointment.update');
    Route::delete('/appointment/delete/{id}', [AppointmentController::class, 'destroy'])->name('appointment.delete');
    Route::get('/appointment/list/', [AppointmentController::class, 'display'])->name('appointment.display');
});



// Add a profile to the current user
Route::get('/profile', [WebController::class, 'profile'])->name('user.profile');
// routes/web.php


//
Route::get('/user/register', [WebController::class, 'index'])->name('user.register');
Route::post('/user/register', [WebController::class, 'store']);
// Login user
Route::get('/login', [WebController::class, 'loginForm'])->name('login.form');
//

// Doctor show

Route::get('/doctor/list/', [DoctorController::class, 'display'])->name('doctor.display');

// deapartment show

Route::get('/department', [DepartmentController::class, 'display'])->name('department.display');



Route::group(['middleware' => ['auth']], function () {

    Route::post('/login', [WebController::class, 'login'])->name('login');
    Route::post('/logout', [WebController::class, 'logout'])->name('logout');
    // Contact Form
    Route::get('/contact/add', [ContactController::class, 'index'])->name('contact.add'); // DIsplay in wesite
    Route::post('/contact/add', [ContactController::class, 'store']);


    // Appointment CRUD
    Route::get('/appointment/add', [AppointmentController::class, 'index'])->name('appointment.add');
    Route::post('/appointment/add', [AppointmentController::class, 'store']);
});
