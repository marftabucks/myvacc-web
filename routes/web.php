<?php

use Illuminate\Support\Facades\Route;

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

Route::get('register', function()
{
    return View::make('auth/register');
});


// USER

Route::get('vaccination-form', function()
{
    return View::make('vaccination-form');
});

Route::get('vaccination-ticket', function()
{
    return View::make('vaccination-ticket');
});

Route::get('profile-patient', function()
{
    return View::make('profile-patient');
});

Route::get('edit-profile-patient', function()
{
    return View::make('edit-profile-patient');
});

// PEMERINTAH
Route::get('dashboard-pemerintah-patients', function()
{
    return View::make('dashboard-pemerintah-patients');
});

Route::get('dashboard-pemerintah-hospitals', function()
{
    return View::make('dashboard-pemerintah-hospitals');
});

Route::get('add-hospital', function()
{
    return View::make('add-hospital');
});

Route::get('edit-hospital', function()
{
    return View::make('edit-hospital');
});


// RUMAH SAKIT
Route::get('dashboard hospital-quota', function()
{
    return View::make('dashboard hospital-quota');
});

Route::get('dashboard hospital-patients', function()
{
    return View::make('dashboard hospital-patients');
});

Route::get('profile-hospital', function()
{
    return View::make('profile-hospital');
});

Route::get('edit-profile-hospital', function()
{
    return View::make('edit-profile-hospital');
});