<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemerintahRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\FormController;
use App\Http\Controllers\VaccTicketController;
use App\Http\Controllers\ProfilePatientController;
use App\Http\Controllers\PemerintahHospitalController;
use App\Http\Controllers\PemerintahPatientController;
use App\Http\Controllers\EditProfilePatientController;
use App\Http\Controllers\PemerintahAddHospitalController;
use App\Http\Controllers\PemerintahEditHospitalController;
use App\Http\Controllers\RSProfileController;
use App\Http\Controllers\RSEditProfileController;
use App\Http\Controllers\RSQuotaController;
use App\Http\Controllers\RSPatientsController;

use Illuminate\Routing\RouteDependencyResolverTrait;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {return redirect()->intended('home');});
Route::get('home', function(){return View::make('home');})->name('home');
Route::get('contact-us', function(){return View::make('contact-us');})->name('contact-us');

// AUTH
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/pemerintah-register', [PemerintahRegisterController::class, 'index'])->name('pemerintah-register');
Route::post('/pemerintah-register', [PemerintahRegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

// USER
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'store']);
Route::get('/vacc-ticket', [VaccTicketController::class, 'index'])->name('vacc-ticket');
Route::get('/profile-patient', [ProfilePatientController::class, 'index'])->name('profile-patient');
Route::get('/edit-profile-patient', [EditProfilePatientController::class, 'index'])->name('edit-profile-patient');

// PEMERINTAH
Route::get('/pemerintah-patients', [PemerintahPatientController::class, 'index'])->name('pemerintah-patients');
Route::post('/pemerintah-patients', [PemerintahPatientController::class, 'store']);
Route::get('/pemerintah-hospitals', [PemerintahHospitalController::class, 'index'])->name('pemerintah-hospitals');
Route::post('/pemerintah-hospitals', [PemerintahHospitalController::class, 'store']);
Route::get('/add-hospital', [PemerintahAddHospitalController::class, 'index'])->name('add-hospital');
Route::post('/add-hospital', [PemerintahAddHospitalController::class, 'store']);
Route::get('/edit-hospital', [PemerintahEditHospitalController::class, 'index'])->name('edit-hospital');
Route::post('/edit-hospital', [PemerintahEditHospitalController::class, 'store']);
 
// RUMAH SAKIT
Route::get('/rs-profile', [RSProfileController::class, 'index'])->name('rs-profile');
Route::get('/rs-edit-profile', [RSEditProfileController::class, 'index'])->name('rs-edit-profile');
Route::post('/rs-edit-profile', [RSEditProfileController::class, 'store']);
Route::get('/rs-quota', [RSQuotaController::class, 'index'])->name('rs-quota');
Route::post('/rs-quota', [RSQuotaController::class, 'store']);
Route::get('/rs-patients', [RSPatientsController::class, 'index'])->name('rs-patients');