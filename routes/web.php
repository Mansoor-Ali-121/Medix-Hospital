<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DepartmentController;

Route::get('/', [Controller::class, 'index'])->name('website');
// Route::get('/contact',[Controller::class,'contact'])->name('contact');
// Route::get('/department', [Controller::class, 'department'])->name('department');



// Add a profile to the current user
Route::get('/profile', [WebController::class, 'profile'])->name('user.profile');
// routes/web.php

Route::post('/logout', [WebController::class, 'logout'])->name('logout');

//
Route::get('/user/register', [WebController::class, 'index'])->name('user.register');
Route::post('/user/register', [WebController::class, 'store']);
// Login user
Route::get('/login', [WebController::class, 'loginForm'])->name('login.form');
Route::post('/login', [WebController::class, 'login'])->name('login');
//
Route::get('/user/showusers', [WebController::class, 'show'])->name('user.show');
Route::get('/user/delete/{id}', [WebController::class, 'destroy'])->name('user.delete');
Route::get('user/edit/{id}', [WebController::class, 'edit'])->name('user.edit'); // To display the edit form
Route::post('user/update/{id}', [WebController::class, 'update'])->name('user.update');




// Doctor crud

Route::get('/doctor/add', [DoctorController::class, 'index'])->name('doctor.add');
Route::post('/doctor/add', [DoctorController::class, 'store']);
Route::get('/doctor/show', [DoctorController::class, 'show'])->name('doctor.show');
Route::get('/doctor/edit/{id}', [DoctorController::class, 'edit'])->name('doctor.edit');
Route::patch('/doctor/update/{id}', [DoctorController::class, 'update'])->name('doctor.update');
Route::get('/doctor/delete/{id}', [DoctorController::class, 'destroy'])->name('doctor.delete');
Route::get('/doctor/list/', [DoctorController::class, 'display'])->name('doctor.display');

// Appointment CRUD

// deapartment CRUD
Route::get('/department/add', [DepartmentController::class, 'index'])->name('department.add');
Route::post('/department/add', [DepartmentController::class, 'store']);
Route::get('/department/show', [DepartmentController::class, 'show'])->name('department.show');
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::get('/department/delete/{id}', [DepartmentController::class, 'destroy'])->name('department.delete');
Route::get('/department', [DepartmentController::class, 'display'])->name('department.display');

// Conatct CRUD
Route::get('/contact/add', [ContactController::class, 'index'])->name('contact.add');
Route::post('/contact/add', [ContactController::class, 'store']);
Route::get('/contact/show', [ContactController::class, 'show'])->name('contact.show');
Route::get('contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit'); // To display the edit form
Route::patch('contact/update/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact/delete/{id}', [ContactController::class, 'destroy'])->name('contact.delete');
