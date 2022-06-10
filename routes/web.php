<?php

use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\AdminNavigate;
use App\Http\Controllers\NavigateController;
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

Route::get('/', [NavigateController::class, 'index']);
Route::get('/check', [NavigateController::class, 'check']);
Route::get('/menu', [NavigateController::class, 'menu']);
Route::get('/search',[NavigateController::class, 'checking'] );
Route::post('/contact',[NavigateController::class, 'store_feedback'] );
Route::get('/gallery',[NavigateController::class, 'gallery']);
Route::redirect('/home', '/', 301);
// The route that the button calls to initialize payment
// Laravel 8

// Laravel 8
Route::post('/pay', [App\Http\Controllers\NavigateController::class, 'redirectToGateway'])->name('pay');

Route::get('/payment/callback', [App\Http\Controllers\NavigateController::class, 'handleGatewayCallback']);

Route::get('/admin/signin',[AdminLogin::class , 'login']);
Route::post('/admin/signin',[AdminLogin::class , 'signin']);
Route::get('/admin/dashboard',[AdminNavigate::class , 'dashboard']);
Route::get('/admin/testimonial',[AdminNavigate::class , 'testimonial']);
Route::post('/admin/testimonial',[AdminNavigate::class , 'store_test']);
Route::get('/admin/reservations',[AdminNavigate::class , 'all_reservation']);
Route::get('/admin/contact',[AdminNavigate::class , 'feedbacks']);
Route::get('/change/password',[AdminNavigate::class , 'change_password']);
Route::post('/change/password',[AdminNavigate::class , 'store_password']);
Route::post('/admin/logout',[AdminNavigate::class , 'logout']);
Route::get('/delete/testimony/{id}',[AdminNavigate::class , 'delete_reservation']);
Route::get('/view/{ref}',[AdminNavigate::class, 'view_reference']);
