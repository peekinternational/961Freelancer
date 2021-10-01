<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobsController;

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

Route::match(['get','post'],'/register', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [RegisterController::class, 'accountLogin'])->name('login');
Route::post('/login', [RegisterController::class, 'checkLogin']);
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
// Forgot Password routes
Route::get('/forgot-password', [RegisterController::class, 'forgotPasswordRoute'])->name('forgot-password');
Route::post('/password/email', [RegisterController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{email}/{token}', [RegisterController::class, 'showPasswordResetForm']);
Route::post('/reset-password', [RegisterController::class, 'resetPassword']);

// Profile
Route::middleware(['auth'])->group(function () {
	Route::resource('profile',ProfileController::class);
	Route::match(['get','post'],'/edit-profile', [ProfileController::class, 'edit_profile']);
	Route::post('/add_skill',[ProfileController::class,'add_skill']);
	Route::delete('/delete-skill/{id}',[ProfileController::class,'deleteSkill']);
	Route::post('/add-experience',[ProfileController::class,'addExperience']);
	Route::delete('/delete-experience/{id}', [ProfileController::class, 'deleteExperience']);
	Route::post('/edit-experience', [ProfileController::class, 'editExperience']);
	Route::post('/add-education',[ProfileController::class,'addEducation']);
	Route::delete('/delete-education/{id}', [ProfileController::class, 'deleteEducation']);
	Route::post('/edit-education', [ProfileController::class, 'editEducation']);
	Route::post('/add-project',[ProfileController::class,'addProject']);
	Route::delete('/delete-project/{id}', [ProfileController::class, 'deleteProject']);
	Route::post('/edit-project', [ProfileController::class, 'editProject']);
	Route::post('/add-certificate',[ProfileController::class,'addCertificate']);
	Route::delete('/delete-certificate/{id}', [ProfileController::class, 'deleteCertificate']);
	Route::post('/edit-certificate', [ProfileController::class, 'editCertificate']);

	// Jobs
	Route::resource('job',JobsController::class);
	Route::get('job-detail/{id}',[JobsController::class, 'show'])->name('job.show');
});




Route::get('/job-listings', function () {
    return view('frontend.job-listings');
})->name('job-listings');
Route::get('/job-single', function () {
    return view('frontend.single-job');
})->name('job-single');
Route::get('/job-proposal', function () {
    return view('frontend.job-proposal');
})->name('job-proposal');

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

