<?php

use App\Http\Controllers\RegisterController;
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
Route::get('/', function () {
    return view('home');
});

Route::get('home', function()
{
    return View::make('home');
});

Route::get('users', function()
{
    return View::make('users');
});

// AUTH
Route::get('login', function()
{
    return View::make('auth/login');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// USER
// Route::get('/dashboard-user', [DashboardUserController::class, 'index'])->name('dashboard-user');
Route::get('dasboard-user', function()
{
    return View::make('user/dashboard-user');
});
Route::get('vaccination-form', function()
{
    return View::make('user/vaccination-form');
});

Route::get('vaccination-ticket', function()
{
    return View::make('user/vaccination-ticket');
});

Route::get('profile-patient', function()
{
    return View::make('user/profile-patient');
});

Route::get('edit-profile-patient', function()
{
    return View::make('user/edit-profile-patient');
});

// PEMERINTAH
Route::get('dashboard-pemerintah-patients', function()
{
    return View::make('pemerintah/dashboard-pemerintah-patients');
});

Route::get('dashboard-pemerintah-hospitals', function()
{
    return View::make('pemerintah/dashboard-pemerintah-hospitals');
});

Route::get('add-hospital', function()
{
    return View::make('pemerintah/add-hospital');
});

Route::get('edit-hospital', function()
{
    return View::make('pemerintah/edit-hospital');
});


// RUMAH SAKIT
Route::get('dashboard hospital-quota', function()
{
<<<<<<< HEAD
    return View::make('rs/dashboard-hospital-quota');
=======
    return View::make('rs/dashboard hospital-quota');
>>>>>>> dcb50f93b253d1fd82bc87679ab64d004afe10c5
});

Route::get('dashboard hospital-patients', function()
{
<<<<<<< HEAD
    return View::make('rs/dashboard-hospital-patients');
=======
    return View::make('rs/dashboard hospital-patients');
>>>>>>> dcb50f93b253d1fd82bc87679ab64d004afe10c5
});

Route::get('profile-hospital', function()
{
    return View::make('rs/profile-hospital');
});

Route::get('edit-profile-hospital', function()
{
    return View::make('rs/edit-profile-hospital');
});