<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SupportController;

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


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/categories',[HomeController::class, 'allCategories'])->name('categories');
Route::get('/contact-us',[HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/contactStore',[HomeController::class, 'store'])->name('contact.store');
Route::get('/about-us',[HomeController::class, 'aboutUs'])->name('about-us');

Route::get('/privacy-policy', function () {
  return view('frontend.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
  return view('frontend.terms-conditions');
})->name('terms-conditions');

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

  Route::get('/account-setting', function () {
    return view('frontend.account-setting');
  })->name('account-setting');
	// Jobs
	Route::resource('job',JobsController::class);
	Route::get('job-detail/{id}',[JobsController::class, 'show'])->name('job.show');
	Route::get('manage-jobs',[JobsController::class, 'manageJobs'])->name('job.manage-jobs');

  Route::get('completed-jobs',[JobsController::class, 'completedJobs'])->name('job.completed-jobs');
  Route::get('cancelled-jobs',[JobsController::class, 'cancelledJobs'])->name('job.cancelled-jobs');
  Route::get('ongoing-jobs',[JobsController::class, 'onGoingJobs'])->name('job.ongoing-jobs');
  
  
  
  Route::get('ongoing-job/{id}',[JobsController::class, 'onGoingJobsDetail'])->name('job.ongoing-job');

	Route::post('save-freelancer',[FreelancerController::class, 'saveFreelancer']);
	Route::post('save-job',[FreelancerController::class, 'saveJob']);

  Route::get('saved-items',[FreelancerController::class, 'savedItems'])->name('freelancers.saved-items');

  // Proposal 
  Route::resource('proposal', ProposalController::class);
  Route::get('/job-proposal/{id}', [ProposalController::class, 'jobProposal']);
  Route::get('/proposals', [ProposalController::class, 'allProposalClient'])->name('proposals');
  Route::post('/hire-freelancer', [ProposalController::class, 'hireFreelancer'])->name('hire-freelancer');
  Route::post('/reject-freelancer', [ProposalController::class, 'rejectFreelancer'])->name('reject-freelancer');

  Route::post('/update-project-status', [ProposalController::class, 'projectStatus'])->name('update-project-status');
  
  // Chat Controller
  Route::get('messages',[ChatController::class,'index'])->name('messages');
  Route::get('friendsList/{id}', [ChatController::class, 'friendsList']);
  Route::post('add-friend', [ChatController::class, 'addFriend'])->name('add-friend');
  Route::post('singleChat', [ChatController::class, 'singleChat']);
  Route::post('send-message', [ChatController::class, 'send']);
  Route::post('seenMessage',[ChatController::class, 'seenMessage']);
  Route::get('messsageCount/{id}',[ChatController::class,'messsageCount']);


  Route::resource('transactions',PaymentController::class);
  Route::post('pay-now',[PaymentController::class,'payNow']);
  Route::post('transaction-agree',[PaymentController::class,'agreeTransaction']);
  Route::get('transaction-link/{id}',[PaymentController::class,'linkTransaction']);

  Route::post('deliver-order',[PaymentController::class,'shipProduct']);
  
  Route::post('receive-order',[PaymentController::class,'receiveProduct']);

  Route::get('rating/{job_id}',[RatingController::class,'show']);
  Route::post('add-rating',[RatingController::class,'store'])->name('add-rating');

});

Route::resource('freelancers',FreelancerController::class);
Route::get('freelancer/{username}',[FreelancerController::class, 'show'])->name('freelancers.show');

Route::get('get-freelancers', [FreelancerController::class, 'getFreelancers']);

Route::get('jobs/{category}',[JobsController::class, 'categoryJobs'])->name('job.category');
// Filter and Sorting
Route::get('sort-jobs',[JobsController::class, 'getJobs']);


Route::name('admin.')->namespace('Admin')->prefix('admin')->group(function(){

	  Route::namespace('Auth')->middleware('guest:admin')->group(function(){
	    Route::match(['get','post'],'/login', [AdminController::class, 'adminLogin'])->name('login');

	  });
  	Route::namespace('Auth')->middleware('auth:admin')->group(function(){

      Route::get('/', function(){
        return view('admin.index');
      });

      Route::resource('users','\App\Http\Controllers\Admin\AdminController');
      Route::get('/freelancers-list', [AdminController::class, 'index'])->name('freelancers-list');
      Route::get('/clients-list', [AdminController::class, 'clientsList'])->name('clients-list');
      Route::resource('projects','\App\Http\Controllers\Admin\ProjectController');
      Route::resource('categories','\App\Http\Controllers\Admin\CategoriesController');
      Route::resource('skills','\App\Http\Controllers\Admin\SkillController');
      Route::resource('supports','\App\Http\Controllers\Admin\SupportController');
      
      Route::post('/logout',function(){
       Auth::guard('admin')->logout();
       return redirect()->action([
           AdminController::class,
           'adminLogin'
       ]);
   		})->name('logout');

      
    });

});