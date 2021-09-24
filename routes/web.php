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
    return view('frontend.index');
})->name('home');
Route::get('/register', function () {
    return view('frontend.signup');
})->name('register');
Route::get('/login', function () {
    return view('frontend.signin');
})->name('login');
Route::get('/job-listings', function () {
    return view('frontend.job-listings');
})->name('job-listings');
Route::get('/job-single', function () {
    return view('frontend.single-job');
})->name('job-single');
Route::get('/job-proposal', function () {
    return view('frontend.job-proposal');
})->name('job-proposal');
Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->name('dashboard');
Route::get('/account-setting', function () {
    return view('frontend.account-setting');
})->name('account-setting');
Route::get('/manage-jobs', function () {
    return view('frontend.manage-jobs');
})->name('manage-jobs');


Route::get('/freelancers', function () {
    return view('frontend.freelancers');
})->name('freelancers');
Route::get('/user', function () {
    return view('frontend.user');
})->name('user');

