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
use App\Models\Proposal;
use App\Models\Rating;
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
      $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'DESC')->paginate(10);
      $categories = Category::get();
      $countries = Countries::get();
      return View::make('frontend.job-listings')->with([
        'jobs' => $jobs,
        'categories' => $categories,
        'countries' => $countries
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
      // $bidsSeleProjCount = Bid::where('project_id', $id)->orWhere('status', '=', 2)->orWhere('status', '=', 3)->get();
      $bidsOnProjCount = Proposal::where('job_id', $id)->where('status', 1)->count();
     
      return \View::make('frontend.single-job')->with([
        'job' => $job,
        'bidsOnProjCount' => $bidsOnProjCount,
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
      $job = Job::find($id);
      $job->job_status = 1;
      if ($job->save()) {
          return response()->json(['status'=>'true' , 'message' => 'Project updated successfully'] , 200);
      }else{
           return response()->json(['status'=>'errorr' , 'message' => 'error occured please try again'] , 200);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $deleteData = Job::find($id);
      if($deleteData->delete()){
          return response()->json(['status'=>'true' , 'message' => 'Project deleted successfully'] , 200);

      }else{
          return response()->json(['status'=>'error' , 'message' => 'error occured please try again'] , 200);

      }
    }

    // Jobs By category
    public function categoryJobs(Request $request,$slug){
      
      $category = Category::where('slug',$slug)->first();
      // dd($category);
      $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_cat',$category->category_name)->orderBy('created_at', 'DESC')->paginate(10);
      $categories = Category::get();
      $countries = Countries::get();
      return View::make('frontend.job-listings')->with([
        'jobs' => $jobs,
        'categories' => $categories,
        'countries' => $countries
      ]);
    }
    // Manage Jobs

    public function manageJobs(Request $request){
      $user_id = auth()->user()->id;
      $myJobs = Job::with('proposal','clientInfo')->whereuser_id($user_id)->orderBy('created_at','DESC')->paginate(5);
      // $bidsOnProjCount = Proposal::where('job_id', $id)->where('status', 1)->count();
      return View::make('frontend.manage-jobs')->with([
        'myJobs' => $myJobs,
        // 'bidsOnProjCount' => $bidsOnProjCount,
      ]);
    }

    // Completed Job
    public function completedJobs(Request $request){
      $user_id = auth()->user()->id;
      $clientjobs = Job::with('proposal','clientInfo','clientRating')->whereuser_id($user_id)->wherejob_status(4)->orderBy('created_at','DESC')->paginate(5);
      // dd($clientjobs);
      $freelancerJobs = Proposal::with('job','freelancerRating')->whereuser_id($user_id)->wherestatus(5)->orderBy('created_at','DESC')->paginate(5);
      // dd($freelancerJobs);
      return View::make('frontend.completed-jobs')->with([
        'clientCompletedJobs' => $clientjobs,
        'freelancerCompletedJobs' => $freelancerJobs
      ]);
    }
    // Cacelled Job
    public function cancelledJobs(Request $request){
      $user_id = auth()->user()->id;
      $clientjobs = Job::with('proposal','clientInfo')->whereuser_id($user_id)->wherejob_status(3)->orderBy('created_at','DESC')->paginate(5);

      $freelancerJobs = Proposal::with('job')->whereuser_id($user_id)->where('status',3)->orWhere('status',4)->orderBy('created_at','DESC')->paginate(5);
      // dd($proposals);
      return View::make('frontend.cancelled-jobs')->with([
        'clientCancelledJobs' => $clientjobs,
        'freelancerCancelledJobs' => $freelancerJobs
      ]);
    }
    // Ongoing Job
    public function onGoingJobs(Request $request){
      $user_id = auth()->user()->id;
      $clientjobs = Job::with('proposal','clientInfo')->whereuser_id($user_id)->wherejob_status(2)->orderBy('created_at','DESC')->paginate(5);

      $freelancerJobs = Proposal::with('job')->whereuser_id($user_id)->wherestatus(2)->orderBy('created_at','DESC')->paginate(5);

      // dd($proposals);
      return View::make('frontend.ongoing-jobs')->with([
        'clientOngoingJobs' => $clientjobs,
        'freelancerOngoingJobs' => $freelancerJobs
      ]);
    }

    // Ongoing Job Detail
    public function onGoingJobsDetail(Request $request,$id){
      $jobData = Proposal::with('job')->wherejob_id($id)->wherestatus(2)->first();

      $user_rating = Rating::where('rating_to',$jobData->user_id)->get();
      $rating_count = $user_rating->count();
      $rating_avg = 0.0;
      $total = 0;
      foreach($user_rating as $rating){
        $total = $total + $rating->general_rating;
        $rating_avg = $total/$rating_count;
      }
      return View::make('frontend.ongoing-detail')->with([
        'ongoingJob' => $jobData,
        'rating_count' => $rating_count,
        'rating_avg' => $rating_avg
      ]);
    }

    // Filters and Sorting
    public function getJobs(Request $request){
      // dd($request->all());
      $sort_by = $request->input('sort_by');
      $category = $request->input('category');
      $job_type = $request->input('job_type');
      $min = $request->input('minPrice');
      $max = $request->input('maxPrice');
      $duration = $request->input('duration');
      $job_location = $request->input('job_location');
      $clear = $request->input('clear');
      // dd($duration);
      if($sort_by == 'oldest'){
        $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'ASC')->paginate(10);
      }
      if($sort_by == 'newest'){
        $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'DESC')->paginate(10);
      }
      if($sort_by == 'random'){
        $jobs = Job::with('saveJobs')->where('job_status',1)->inRandomOrder()->paginate(10);
      }

      if($category != ''){
        $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_cat','like','%'.$category.'%')->orderBy('created_at', 'DESC')->paginate(10);
      }
      

      if($job_type == 'hourly'){
        $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_type',$job_type)->orderBy('created_at', 'DESC')->paginate(10);
      }
      if ($job_type == 'fixed') {
        $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_type',$job_type)->orderBy('created_at', 'DESC')->paginate(10);
      }
      if($job_type == 'all_type'){
        $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'DESC')->paginate(10);
      }
      
      
      if($min != null && $max !=null){
        $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_type','hourly')->whereBetween('hourly_min_price',[0,(int)$min])->whereBetween('hourly_max_price',[(int)$min,(int)$max])->orderBy('created_at', 'DESC')->paginate(10);
      }

      if($duration != '' && $duration != null){
        if ($duration == 'project') {
          $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'DESC')->paginate(10);
        }else{
          $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_duration','like','%'.$duration.'%')->orderBy('created_at', 'DESC')->paginate(10);
        }
      }
      
      if($job_location != ''){
        $jobs = Job::with('saveJobs')->where('job_status',1)->where('job_location','like','%'.$job_location.'%')->orderBy('created_at', 'DESC')->paginate(10);
      }
      
      if($clear){
        $jobs = Job::with('saveJobs')->where('job_status',1)->orderBy('created_at', 'DESC')->paginate(10);
      }

      return View::make('frontend.ajax.job-sorting')->with([
        'jobs' => $jobs
      ]);
    }
}
