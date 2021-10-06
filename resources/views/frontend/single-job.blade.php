@extends('frontend.layouts.app')
@section('content')
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<div class="wt-haslayout wt-main-section">
		<!-- User Listing Start-->
		<div class="container">
			<div id="wt-twocolumns" class="row wt-twocolumns wt-haslayout">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 float-left">
					<div class="wt-proposalholder">
						<span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
						<div class="wt-proposalhead">
							<h2>{{$job->job_title}}</h2>
							<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
								<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> {{$job->service_level}}</span></li>
								<li><span><img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description">  United States</span></li>
								<li><span class="text-capitalize"><i class="far fa-folder"></i> Type: {{$job->job_type}}</span></li>
								<li><span><i class="far fa-clock"></i> Duration: {{$job->job_duration}}</span></li>
								@if($job->job_type == 'fixed')
								<li><span> Fixed price: <i class="far fa-dollar-sign"></i>{{$job->fixed_price}}</span></li>
								@else
								<li><span> Hourly: <font class="fw-bold"><i class="far fa-dollar-sign"></i>{{$job->hourly_min_price}} - <i class="far fa-dollar-sign"></i>{{$job->hourly_max_price}}</font></span></li>
								@endif
							</ul>
						</div>
						@if($job->user_id != Auth::user()->id)
						<div class="wt-btnarea"><a href="{{route('job-proposal')}}" class="wt-btn">Send Proposal</a></div>
						@endif
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
					<div class="wt-projectdetail-holder">
						<div class="wt-projectdetail">
							<div class="wt-title">
								<h3>Project Detail</h3>
							</div>
							<div class="wt-description">
								<p>{{$job->job_description}}</p>
							</div>
						</div>
						<div class="wt-skillsrequired">
							<div class="wt-title">
								<h3>Skills Required</h3>
							</div>
							<div class="wt-tag wt-widgettag">
								@if ($job->job_skills != "")
									@foreach(explode(',',$job->job_skills) as $skill)
									<a href="javascript:void(0);">{{$skill}}</a>
									@endforeach
								@endif
							</div>
						</div>
						<div class="wt-attachments">
							<div class="wt-title">
								<h3>Attachments</h3>
							</div>
							<ul class="wt-attachfile">
								@if ($job->job_attachement != "")
									@foreach(explode(',',$job->job_attachement) as $attach)
									<li>
										<span>{{$attach}}</span>
										<em><a href="{{asset('assets/images/jobs/'.$attach)}}" download><i class="fal fa-download"></i></a></em>
									</li>
									@endforeach
								@endif
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
					<aside id="wt-sidebar" class="wt-sidebar">
						<div class="wt-proposalsr">
							<div class="wt-proposalsrcontent">
								<span class="wt-proposalsicon"><i class="fa fa-angle-double-down"></i><i class="fa fa-newspaper"></i></span>
								<div class="wt-title">
									<h3>0</h3>
									<span>Proposals Received Till<em>June 27, 2018</em></span>
								</div>
							</div>
							<div class="wt-clicksavearea">
								<span>Job ID: {{$job->job_id}}</span>
								<a href="javascrip:void(0);" onclick="saveJob({{$job->id}})" class="wt-clicksavebtn save{{$job->id}}" >
								<!-- @if($job->saveJobs != '')
									@foreach($job->saveJobs as $save)
										@if($save->user_id == Auth::user()->id && $save->status == 1)
										<i class="fa fa-heart"></i> Saved
										@endif
										@if($save->user_id == Auth::user()->id && $save->status == 0)
											<i class="far fa-heart"></i> Click to save
										@endif
									@endforeach
									@else

								@endif -->
									<i class="far fa-heart"></i> Click to save

								</a>
							</div>
						</div>
						<div class="wt-widget wt-companysinfo-jobsingle">
							<div class="wt-companysdetails">
								<figure class="wt-companysimg">
									<img src="{{asset('assets/images/user/cover/'.$job->clientInfo->cover_image)}}" alt="img description">
								</figure>
								<div class="wt-companysinfo">
									<figure><img src="{{asset('assets/images/user/profile/'.$job->clientInfo->profile_image)}}" alt="img description"></figure>
									<div class="wt-title">
										<!-- <a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Verified Company</a> -->
										<h2>{{$job->clientInfo->first_name}} {{$job->clientInfo->last_name}}</h2>
									</div>
									<ul class="wt-postarticlemeta">
										<li>
											<a href="javascript:void(0);">
												<span>Open Jobs</span>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<span>Full Profile</span>
											</a>
										</li>
										<li class="wt-following">
											<a href="javascript:void(0);">
												<span>Following</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- <div class="wt-widget wt-sharejob">
							<div class="wt-widgettitle">
								<h2>Share This Job</h2>
							</div>
							<div class="wt-widgetcontent">
								<ul class="wt-socialiconssimple">
									<li class="wt-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i>Share on Facebook</a></li>
									<li class="wt-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i>Share on Twitter</a></li>
									<li class="wt-linkedin"><a href="javascript:void(0);"><i class="fab fa-linkedin-in"></i>Share on Linkedin</a></li>
									<li class="wt-googleplus"><a href="javascript:void(0);"><i class="fab fa-google-plus-g"></i>Share on Google Plus</a></li>
								</ul>
							</div>
						</div> -->
					</aside>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>
<!--Main End-->
@endsection
@section('script')
<script>
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	function saveJob(id){
   	$.ajax({
	    url:"{{ url('save-job') }}",
	    method:"POST",
	    data:{
	    	"_token": CSRF_TOKEN,
        "job_id": id,
        "save_type": 'Job',
      },
	    success:function(data){
	    	console.log(data);
	    	if (data == 1) {
	    		$('.save'+id).html('<i class="fa fa-heart"></i> Saved');
	    	}
	    	if(data == 2){
	    		$('.save'+id).html('<i class="far fa-heart"></i> Click to save');
	    	}
	    	// $("#add-project-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	}
</script>
@endsection