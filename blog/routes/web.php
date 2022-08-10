<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloggerController;


Route::get('/bloggerLogin', function () {return view('Blogger.login');})->name('bloggerLogin');
Route::post('/bloggerLogin',[BloggerController::class, 'bloggerLoginSubmit'])->name('bloggerLogin');
Route::get('/bloggerRegistration', function () {return view('Blogger.registration');})->name('bloggerRegistration');
Route::post('/bloggerRegistration',[BloggerController::class, 'BloggerCreateSubmit'])->name('bloggerRegistration');
Route::get('/bloggerDash', function () {return view('Blogger.dashboard');})->name('bloggerDash')->middleware('bloggerValid');
Route::get('/bloggerProf', function () {return view('Blogger.profileView');})->name('bloggerProf')->middleware('bloggerValid');
Route::get('/bloggerLogout',[BloggerController::class, 'logout'])->name('bloggerLogout')->middleware('bloggerValid');
Route::get('/bloggerOtp', function () {return view('blogger.email.otp');})->name('bloggerOtp');
Route::post('/bloggerOtp',[BloggerController::class, 'otpsend'])->name('bloggerOtp');
Route::get('/blogAdd', function () {return view('Blogger.addblog');})->name('blogAdd')->middleware('bloggerValid');
Route::post('/blogAdd',[BloggerController::class, 'blogAdd'])->name('blogAdd')->middleware('bloggerValid');
Route::get('/bloglist',[BloggerController::class, 'bloglist'])->name('bloglist')->middleware('bloggerValid');