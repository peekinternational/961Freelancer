<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\UserSkill;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserProject;
use App\Models\SaveItem;
use App\Models\Job;
use Hash;
use Session;
use Mail;
use Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
        $freelancers = User::with('userSkills','saveInfo')->whereaccount_type('Freelancer')->get();
        return View::make('admin.freelancers-list')->with([
            'freelancers' => $freelancers
        ]);
    }
    public function adminLogin(Request $request)
    {
      if($request->isMethod('post')){
         if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])){
      //Authentication passed...
      if(Auth::guard('admin')->check()){
          // dd(Auth::guard('tech')->user()->name );
        $freelancers = User::with('userSkills','saveInfo')->whereaccount_type('Freelancer')->get();
        return View::make('admin.freelancers-list')->with([
            'freelancers' => $freelancers
        ]);
          // return redirect(RouteServiceProvider::ADMIN);

              }
          }
      }
      return view('admin.auth.login');
    }

    // Clients List
    public function clientsList(Request $request){
        $clients = User::with('userSkills','saveInfo')->whereaccount_type('Client')->get();
        return View::make('admin.clients-list')->with([
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function live()
    {
        return "";
    }
}
