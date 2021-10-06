@extends('frontend.layouts.app')
@section('content')
<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder wt-innerbannerholdervtwo">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
			</div>
		</div>
	</div>
</div>
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<!-- User Profile Start-->
	<div class="wt-main-section wt-paddingtopnull wt-haslayout">
		<div class="container">
			<div class="row justify-content-center">	
				<div class="col-12 col-sm-12 col-md-11 col-lg-11">
					<div class="wt-userprofileholder row">
						<!-- <span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span> -->
						<div class="col-12 col-sm-12 col-md-12 col-lg-3 float-left">
							<div class="row">
								<div class="wt-userprofile">
									<figure>
										@if($freelancer->profile_image != '')
										<img src="{{asset('assets/images/user/profile/'.$freelancer->profile_image)}}" alt="img description">
										@else
										<img src="{{asset('assets/images/user-login.png')}}" alt="img description">
										@endif
										<div class="wt-userdropdown wt-online">
										</div>
									</figure>
									<div class="wt-title">
										<h3><i class="fa fa-check-circle"></i> {{$freelancer->first_name}} {{$freelancer->last_name}}</h3>
										<span>5.0/5 <a class="javascript:void(0);">(0 Feedback)</a> <br>Member since {{$freelancer->created_at->format('F j, Y')}}<br><a href="javascript:void(0);">@ {{$freelancer->username}}</a> </span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-12 col-lg-9 float-left">
							<div class="row">
								<div class="wt-proposalhead wt-userdetails">
									<h2>{{$freelancer->tagline}}</h2>
									<ul class="wt-userlisting-breadcrumb wt-userlisting-breadcrumbvtwo">
										<li><span><i class="far fa-money-bill-alt"></i> ${{$freelancer->hourly_rate}}.00 / hr</span></li>
										<li><span><!-- <img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description"> -->  {{$freelancer->country}}</span></li>
										<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
									</ul>
									<div class="wt-description">
										<p>{{$freelancer->description}}</p>
									</div>
								</div>
								<div id="wt-statistics" class="wt-statistics wt-profilecounter">
									<div class="wt-statisticcontent wt-countercolor1">
										<h3 data-from="0" data-to="03" data-speed="800" data-refresh-interval="03">00</h3>
										<h4>Ongoing <br>Projects</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor2">
										<h3 data-from="0" data-to="1503" data-speed="8000" data-refresh-interval="100">00</h3>
										<h4>Completed <br>Projects</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor4">
										<h3 data-from="0" data-to="02" data-speed="800" data-refresh-interval="02">00</h3>
										<h4>Cancelled <br>Projects</h4>
									</div>
									<div class="wt-statisticcontent wt-countercolor3">
										<h3 data-from="0" data-to="25" data-speed="8000" data-refresh-interval="100">00</h3>
										<em>k</em>
										<h4>Served <br>Hours</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- User Profile End-->
		<!-- User Listing Start-->
		<div class="container">
			<div id="wt-twocolumns" class="row wt-twocolumns wt-haslayout justify-content-center">
				<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 float-left">
					<div class="wt-usersingle">
						<div class="wt-clientfeedback">
							<div class="wt-usertitle wt-titlewithselect">
								<h2>Client Feedback</h2>
								<div class="form-group">
									<span class="wt-select">
										<select>
											<option value="Show All">Show All</option>
											<option value="One Page">One Page </option>
											<option value="Two Page">Two Page</option>
										</select>
									</span>
								</div>
							</div>
							<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
								<figure class="wt-userlistingimg">
									<img src="{{asset('assets/images/client/img-01.jpg')}}" alt="image description">
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Themeforest Company</a>
											<h3>Translation and Proof Reading (Multi Language)</h3>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="fa fa-dollar-sign"></i> Beginner</span></li>
											<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
											<li><span><i class="fal fa-spinner fa-spin"></i> In Progress</span></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="wt-userlistinghold wt-userlistingsingle">	
								<figure class="wt-userlistingimg">
									<img src="{{asset('assets/images/client/img-02.jpg')}}" alt="image description">
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Videohive Studio</a>
											<h3>Need help translating app stringlist from English to Arabic</h3>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Intermediate</span></li>
											<li><span><img src="{{asset('assets/images/flag/img-03.png')}}" alt="img description">  Canada</span></li>
											<li><span><i class="far fa-calendar"></i> Jun 2017 - Jul 2017</span></li>
											<li><span class="wt-stars"><span></span></span></li>
										</ul>
									</div>
								</div>
								<div class="wt-description">
									<p>“ Eiusmod tempor incididunt ut labore et dolore magna quis nostrud exercitation ullamco laboris. ”</p>
								</div>
							</div>
							<div class="wt-userlistinghold wt-userlistingsingle wt-bgcolor">	
								<figure class="wt-userlistingimg">
									<img src="{{asset('assets/images/client/img-03.jpg')}}" alt="image description">
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="javascript:void(0);"><i class="fa fa-check-circle"></i> Photodune Professionals</a>
											<h3>Blog Post Writing in English Language</h3>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i><i class="fa fa-dollar-sign"></i> Professional</span></li>
											<li><span><img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description"> United States</span></li>
											<li><span><i class="far fa-calendar"></i>  Jun 2017</span></li>
											<li><span class="wt-stars"><span></span></span></li>
										</ul>
									</div>
								</div>
								<div class="wt-description">
									<p>“ Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliquaenim ad minim veniamac quis nostrud exercitation ullamco laboris. ”</p>
								</div>
							</div>
							<div class="wt-btnarea">
								<a href="javascript:void(0);" class="wt-btn">Load More</a>
							</div>
						</div>
						@if($freelancer->userProjects != '')
						<div class="wt-craftedprojects">
							<div class="wt-usertitle">
								<h2>Projects</h2>
							</div>
							<div class="wt-projects">
								@foreach($freelancer->userProjects as $project)
								<div class="wt-project">
									<figure>
										<img src="{{asset('assets/images/projects/'.$project->project_img)}}" alt="img description" style="height: 140px;">
									</figure>
									<div class="wt-projectcontent">
										<h3><a href="{{$project->project_url}}" class="text-reset">{{$project->project_title}}</a></h3>
										<!-- <a href="{{$project->project_url}}">{{$project->project_url}}</a> -->
									</div>
								</div>
								@endforeach
								
								<!-- <div class="wt-btnarea">
									<a href="javascript:void(0);" class="wt-btn">Load More</a>
								</div> -->
							</div>
						</div>
						@endif
						@if($freelancer->userInfo != '')
						<div class="wt-experience">
							<div class="wt-usertitle">
								<h2>Experience</h2>
							</div>
							<div class="wt-experiencelisting-hold">
								@foreach($freelancer->userInfo as $key=>$experience)
								<div class="wt-experiencelisting wt-bgcolor">
									<div class="wt-title">
										<h3>{{$experience->job_title}}</h3>
									</div>
									<div class="wt-experiencecontent">
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="far fa-building"></i> {{$experience->company_title}}</span></li>
											<li><span><i class="far fa-calendar"></i>  {{ \Carbon\Carbon::parse($experience->start_date)->format('F Y')}} - 
												@if($experience->end_date == '')
												Till Now
												@else
												{{ \Carbon\Carbon::parse($experience->end_date)->format('F Y')}}
												@endif
											</span></li>
										</ul>
										<div class="wt-description">
											<p>{{$experience->job_description}}</p>
										</div>
									</div>
								</div>
								@endforeach
								<div class="divheight"></div>
							</div>
						</div>
						@endif
						@if($freelancer->education != '')
						<div class="wt-experience wt-education">
							<div class="wt-usertitle">
								<h2>Education</h2>
							</div>
							<div class="wt-experiencelisting-hold">
								@foreach($freelancer->education as $key=>$education)
								<div class="wt-experiencelisting wt-bgcolor">
									<div class="wt-title">
										<h3>{{$education->degree}}</h3>
									</div>
									<div class="wt-experiencecontent">
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="far fa-building"></i> {{$education->institute}}</span></li>
											<li><span><i class="far fa-calendar"></i> {{\Carbon\Carbon::parse($education->start_date)->format('F Y')}} - {{\Carbon\Carbon::parse($education->end_date)->format('F Y')}}</span></li>
										</ul>
										<div class="wt-description">
											<p>“ {{$education->description}} ”</p>
										</div>
									</div>
								</div>
								@endforeach
								<div class="divheight"></div>
							</div>
						</div>
						@endif
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 float-left">
					<aside id="wt-sidebar" class="wt-sidebar">
						@if($freelancer->userSkills != '')
						<div id="wt-ourskill" class="wt-widget">
							<div class="wt-widgettitle">
								<h2>My Skills</h2>
							</div>
							<div class="wt-widgetcontent wt-skillscontent">
								@foreach($freelancer->userSkills as $key=>$skill)
								<div class="wt-skillholder" data-percent="{{$skill->skill_rate}}%">
									<span>{{ App\Models\User::skillTitle($skill->skill_id)->skill_name }} <em>{{$skill->skill_rate}}%</em></span>
									<div class="wt-skillbarholder"><div class="wt-skillbar"></div></div>
								</div>
								@endforeach
								<!-- <div class="wt-btnarea">
									<a href="javascript:void(0)">View More</a>
								</div> -->
							</div>
						</div>
						@endif
						@if($freelancer->certificates != '')
						<div class="wt-widget wt-widgetarticlesholder wt-articlesuser">
							<div class="wt-widgettitle">
								<h2>Awards &amp; Certifications</h2>
							</div>
							<div class="wt-widgetcontent">
								@foreach($freelancer->certificates as $key=>$certificate)
								<div class="wt-particlehold">
									<figure>
										<img src="{{asset('assets/images/thumbnail/img-07.jpg')}}" alt="image description">
									</figure>
									<div class="wt-particlecontent">
										<h3><a href="javascript:void(0);">{{$certificate->certificate_title}}</a></h3>
										<span><i class="fal fa-calendar"></i> {{\Carbon\Carbon::parse($certificate->issue_date)->format('F Y')}}</span>
									</div>
								</div>
								@endforeach
							</div>
						</div>
						@endif
						<!-- <div class="wt-widget">
							<div class="wt-widgettitle">
								<h2>Similar Freelancers</h2>
							</div>
							<div class="wt-widgetcontent">
								<div class="wt-widgettag wt-widgettagvtwo">
									<a href="javascript:void(0);">PHP Developer</a>
									<a href="javascript:void(0);">PHP</a>
									<a href="javascript:void(0);">My SQL</a>
									<a href="javascript:void(0);">Business</a>
									<a href="javascript:void(0);">Website Development</a>
									<a href="javascript:void(0);">Collaboration</a>
									<a href="javascript:void(0);">Decent</a>
								</div>
							</div>
						</div> -->
						<!-- <div class="wt-widget wt-sharejob">
							<div class="wt-widgettitle">
								<h2>Share This User</h2>
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
@endsection