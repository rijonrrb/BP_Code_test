<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloggerController;
use App\Http\Controllers\BlogController;

Route::get('/',[BlogController::class, 'welcome'])->name('welcome');
Route::get('/bloggerLogin', function () {return view('Blogger.login');})->name('bloggerLogin');
Route::post('/bloggerLogin',[BloggerController::class, 'bloggerLoginSubmit'])->name('bloggerLogin');
Route::get('/blogger', function () {return view('Blogger.dashboard');})->name('bloggerDash')->middleware('bloggerValid');
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
Route::get('/blogUpdate',[BloggerController::class, 'updatelist'])->name('blogUpdate')->middleware('bloggerValid');
Route::get('/blogUpdate/{id}',[BloggerController::class, 'blogUp'])->name('blogUp')->middleware('bloggerValid');
Route::post('/blogInfoUpdate',[BloggerController::class, 'blogInfoUp'])->name('blogInfoUp')->middleware('bloggerValid');
Route::get('/blogDelete',[BloggerController::class, 'blogDellist'])->name('blogDelete')->middleware('bloggerValid');
Route::get('/blogDelete/{id}',[BloggerController::class, 'blogDel'])->name('blogDel')->middleware('bloggerValid');
Route::get('/allBlog',[BlogController::class, 'allBlog'])->name('allBlog')->middleware('bloggerValid');