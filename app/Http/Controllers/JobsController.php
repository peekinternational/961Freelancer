<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Models\Skills;
use App\Models\Job;
use App\Models\Category;
use App\Models\Countries;
use Illuminate\Support\Str;
use Hash;
use Session;
use Mail;
use Redirect;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $jobs = Job::with('saveJobs')->orderBy('created_at', 'DESC')->paginate(10);
      
      return View::make('frontend.job-listings')->with([
        'jobs' => $jobs
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skills = Skills::get();
        $categories = Category::get();
        $countries = Countries::get();
        return \View::make('frontend.post-job',compact('skills','categories','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'job_title' => 'required',
        'service_level' => 'required',
        'job_type' => 'required',
        'job_duration' => 'required',
        'job_description' => 'required',
        'job_skills' => 'required',
        'job_cat' => 'required',

      ],[

        'job_title.required' => 'Enter job title',
        'service_level.required' => 'Select service level',
        'job_type.required' => 'Select job type',
        'job_duration.required' => 'Select job duration',
        'job_description.required' => 'Enter job description',
        'job_skills.required' => 'Select at least one skill to continue',
        'job_cat.required' => 'Select at least one category to continue',
      ]);
      // dd($request->all());
      $job = new Job();
      $job->job_id = time() . Str::random(9);
      $job->user_id = auth()->user()->id;
      $job->job_title = $request->input('job_title');
      $job->service_level = $request->input('service_level');
      $job->job_type = $request->input('job_type');
      $job->hourly_min_price = $request->input('hourly_min_price');
      $job->hourly_max_price = $request->input('hourly_max_price');
      $job->fixed_price = $request->input('fixed_price');
      $job->job_duration = $request->input('job_duration');
      $job->job_description = $request->input('job_description');
      $job->job_location = $request->input('job_location');
      $job_skills = $request->input('job_skills');
      $skills = array();
      foreach ($job_skills as $key => $skill) {
        $skills[] = $skill;
      }
      $job->job_skills = implode(",",$skills);
      $job->job_cat = $request->input('job_cat');
      // $categories = array();
      // foreach ($job_cat as $key => $cat) {
      //   $categories[] = $cat;
      // }
      // $job->job_cat = implode(",",$categories);
      $images=array();
      if($files=$request->file('job_attachement')){
        foreach($files as $file){
          
          $imagename= 'job-'.rand(000000,999999).'.'.$file->getClientOriginalExtension();
          $extension= $file->getClientOriginalExtension();
          // $imagename= $filename;
          $destinationpath= public_path('assets/images/jobs/');
          $file->move($destinationpath, $imagename);

          $images[]=$imagename;
        }
      }
      $job->job_attachement = implode(",",$images);
      $jobSave = $job->save();
      return redirect('job-detail/'.$job->job_id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $job = Job::with('clientInfo','saveJobs')->wherejob_id($id)->first();
      return \View::make('frontend.single-job')->with([
        'job' => $job
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

    // Manage Jobs

    public function manageJobs(Request $request){
      $user_id = auth()->user()->id;
      $myJobs = Job::with('clientInfo')->whereuser_id($user_id)->orderBy('created_at','DESC')->paginate(5);
     
      return View::make('frontend.manage-jobs')->with([
        'myJobs' => $myJobs
      ]);
    }
}
