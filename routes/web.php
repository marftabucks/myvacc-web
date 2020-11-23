<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PemerintahRegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemerintahLoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardUserController;
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
use Illuminate\HTTP\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {return view('home');});
Route::get('home', function(){return View::make('home');})->name('home');
Route::get('contact-us', function(){return View::make('contact-us');})->name('contact-us');

// AUTH
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/pemerintah-register', [PemerintahRegisterController::class, 'index'])->name('pemerintah-register');
Route::post('/pemerintah-register', [PemerintahRegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/pemerintah-login', [PemerintahLoginController::class, 'index'])->name('pemerintah-login');
Route::post('/pemerintah-login', [PemerintahLoginController::class, 'authenticate']);
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');

// USER
Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('dashboard-user');
Route::get('/form', [FormController::class, 'index'])->name('form');
Route::post('/form', [FormController::class, 'store']);
Route::get('/vacc-ticket', [VaccTicketController::class, 'index'])->name('vacc-ticket');
Route::get('/profile-patient', [ProfilePatientController::class, 'index'])->name('profile-patient');
Route::get('/edit-profile-patient', [EditProfilePatientController::class, 'index'])->name('edit-profile-patient');

// PEMERINTAH
Route::get('/pemerintah-patients', [PemerintahPatientController::class, 'index'])->name('pemerintah-patients');
Route::get('/pemerintah-hospitals', [PemerintahHospitalController::class, 'index'])->name('pemerintah-hospitals');
Route::get('/add-hospital', [PemerintahAddHospitalController::class, 'index'])->name('add-hospital');
Route::get('/edit-hospital', [PemerintahEditHospitalController::class, 'index'])->name('edit-hospital');

// RUMAH SAKIT
Route::get('/rs-profile', [RSProfileController::class, 'index'])->name('rs-profile');
Route::get('/rs-edit-profile', [RSEditProfileController::class, 'index'])->name('rs-edit-profile');
Route::get('/rs-quota', [RSQuotaController::class, 'index'])->name('rs-quota');
Route::get('/rs-patients', [RSPatientsController::class, 'index'])->name('rs-patients');