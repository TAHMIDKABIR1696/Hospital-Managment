<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// admin--->doctor panale
Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

// appointment
// Show appointment form (GET)
Route::post('/appointment', [HomeController::class, 'appointment']);
Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/viewappointment', [AdminController::class, 'viewappointment']);
Route::get('/canceled/{id}', [AdminController::class, 'canceled']);
Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('showdoctor', [AdminController::class, 'showdoctor']);
Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);

Route::get('showusers', [AdminController::class, 'showusers']);
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);


