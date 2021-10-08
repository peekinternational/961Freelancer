<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\UserSkill;
use App\Models\UserEducation;
use App\Models\UserExperience;
use App\Models\UserProject;
use App\Models\SaveItem;
use Hash;
use Session;
use Mail;
use Redirect;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancers = User::with('userSkills','saveInfo')->whereaccount_type('Freelancer')->paginate(10);

        return View::make('frontend.freelancers')->with([
            'freelancers' => $freelancers
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
        $username = $id;
        $freelancer = User::with('userInfo','education','userSkills','userProjects','certificates')->whereusername($username)->first();

        return View::make('frontend.user')->with([
            'freelancer' => $freelancer
        ]);
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

    // Saved Items
    public function savedItems(Request $request){
      $user_id = auth()->user()->id;
      $getSavedFreelancer = SaveItem::with('userData')->whereuser_id($user_id)->where('save_type','Freelancer')->get();
      $countFreelancer = $getSavedFreelancer->count();

      $getSavedjob = SaveItem::with('jobData')->whereuser_id($user_id)->where('save_type','Job')->get();
      $jobCount = $getSavedjob->count();
      return View::make('frontend.saved-items')->with([
        "saveFreelancers" => $getSavedFreelancer,
        "freelancerCount" => $countFreelancer,
        "saveJobs" => $getSavedjob,
        "jobCount" => $jobCount
      ]);
    }

    public function saveFreelancer(Request $request){
      $user_id = auth()->user()->id;
      $freelancer_id = $request->input('freelancer_id');
      
      $save = new SaveItem;

      $data = SaveItem::where('freelancer_id',$freelancer_id)->where('user_id',$user_id)->where('save_type','Freelancer')->first();
      if($data){
        if($data->status == 1){
          $update = SaveItem::where('freelancer_id',$freelancer_id)->where('user_id',$user_id)->update(['status' => 0]);
          
          return 2;
          
        }else{
          $update = SaveItem::where('freelancer_id',$freelancer_id)->where('user_id',$user_id)->update(['status' => 1]);
          
          return 1;
        }
      }else{
        $save->user_id = $user_id;
        $save->freelancer_id = $request->input('freelancer_id');
        $save->save_type = $request->input('save_type');
        $save->status = 1;
        $save->save();

        return 1;
      }
      
    }
    public function saveJob(Request $request){
      $user_id = auth()->user()->id;
      $job_id = $request->input('job_id');
      
      $save = new SaveItem;

      $data = SaveItem::where('job_id',$job_id)->where('user_id',$user_id)->where('save_type','Job')->first();
      if($data){
        if($data->status == 1){
          $update = SaveItem::where('job_id',$job_id)->where('user_id',$user_id)->update(['status' => 0]);
          
          return 2;
          
        }else{
          $update = SaveItem::where('job_id',$job_id)->where('user_id',$user_id)->update(['status' => 1]);
          
          return 1;
        }
      }else{
        $save->user_id = $user_id;
        $save->job_id = $request->input('job_id');
        $save->save_type = $request->input('save_type');
        $save->status = 1;
        $save->save();

        return 1;
      }
      
    }
}