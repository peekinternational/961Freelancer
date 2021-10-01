@extends('frontend.layouts.app')
@section('dashboardstyle')
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/dashboard.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/dbresponsive.css') }}">
<script src="{{asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<style>
	.home-header{
		z-index: 29;
		background: #fff;
	}
</style>
@endsection
@section('content')
<!--Main Start-->
<!-- Wrapper Start -->
<div id="wt-wrapper" class="wt-wrapper wt-haslayout">
	<!-- Content Wrapper Start -->
	<div class="wt-contentwrapper">
		<main id="wt-main" class="wt-main wt-haslayout">
			<!--Sidebar Start-->
			{{ View::make('frontend.includes.dashboard-sidebar') }}
			<!--Sidebar Start-->
			<!--Register Form Start-->
			<section class="wt-haslayout">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="wt-haslayout wt-dbsectionspace">
							<div class="wt-dashboardbox wt-dashboardtabsholder">
								<div class="wt-dashboardboxtitle">
									<h2>My Profile</h2>
								</div>
								
								<div class="wt-dashboardtabs">
									<ul class="wt-tabstitle nav mb-3" id="pills-tab" role="tablist">
									  <li class="nav-item" role="presentation">
									    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Personal Details &amp; Skills</a>
									  </li>
									  <li class="nav-item" role="presentation">
									    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Experience &amp; Education</a>
									  </li>
									  <li class="nav-item" role="presentation">
									    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Projects &amp; Certifications</a>
									  </li>
									</ul>
								</div>

								<div class="wt-tabscontent tab-content" id="nav-tabContent">
								  <div class="wt-personalskillshold tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								  	<div class="wt-yourdetails wt-tabsinfo">
								  		<div class="wt-tabscontenttitle">
								  			<h2>Your Details</h2>
								  		</div>
								  		<form class="wt-formtheme wt-userform" id="edit-profile-form" enctype="multipart/form-data">
								  			@csrf
								  			<fieldset>
								  				<div class="form-group form-group-half">
								  					<input type="text" name="username" class="form-control" placeholder="User Name" value="{{Auth::user()->username}}" readonly>
								  				</div>
								  				<div class="form-group form-group-half">
								  					<input type="email" name="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}" readonly>
								  				</div>
								  				<div class="form-group form-group-half">
								  					<span class="wt-select">
								  						<select name="gender">
								  							<option value="">Select Gender</option>
								  							<option value="Male" @if(Auth::user()->gender == 'Male') selected @endif>Male</option>
								  							<option value="Female" @if(Auth::user()->gender == 'Female') selected @endif>Female</option>
								  						</select>
								  					</span>
								  				</div>
								  				<div class="form-group form-group-half">
								  					<input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{Auth::user()->first_name}}">
								  				</div>
								  				<div class="form-group form-group-half">
								  					<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{Auth::user()->last_name}}">
								  				</div>
								  				<div class="form-group form-group-half">
								  					<input type="number" name="hourly_rate" class="form-control" placeholder="Your Service Hourly Rate ($)" value="{{Auth::user()->hourly_rate}}">
								  				</div>
								  				<div class="form-group">
								  					<input type="text" name="tagline" class="form-control" placeholder="Add Your Tagline Here" value="{{Auth::user()->tagline}}">
								  				</div>
								  				<div class="form-group">
								  					<textarea name="description" class="form-control" placeholder="Description">{{Auth::user()->description}}</textarea>
								  				</div>
								  			</fieldset>
								  		</form>
								  	</div>
								  	<div class="wt-profilephoto wt-tabsinfo">
								  		<div class="wt-tabscontenttitle">
								  			<h2>Profile Photo</h2>
								  		</div>
								  		<div class="wt-profilephotocontent">
								  			<!-- <div class="wt-description">
								  				<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
								  			</div> -->
								  			<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
								  				<fieldset>
								  					<div class="form-group form-group-label">
								  						<div class="wt-labelgroup">
								  							<label for="filep">
								  								<span class="wt-btn">Select Files</span>
								  								<input type="file" name="profile_image" id="filep" form="edit-profile-form" onchange="profileImage(this);">
								  							</label>
								  							<span>File upload</span>
								  							<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
								  						</div>
								  					</div>
								  					<div class="form-group">
								  						<ul class="wt-attachfile wt-attachfilevtwo">
								  							<li class="wt-uploadingholder">
								  								<div class="wt-uploadingbox">
								  									<div class="wt-designimg">
								  										<input id="demoz" type="radio" name="employees" value="company" checked="">
								  										<label for="demoz">
								  											@if(Auth::user()->profile_image)
								  											<img src="{{asset('assets/images/user/profile/'.Auth::user()->profile_image)}}" alt="img description" id="profile">
								  											@else
								  											<img src="{{asset('assets/images/user/userlisting/img-07.jpg')}}" alt="img description" id="profile">
								  											@endif
								  											<i class="fa fa-check"></i></label>
								  									</div>
								  									<div class="wt-uploadingbar">
								  										<!-- <span class="uploadprogressbar"></span> -->
								  										<span id="img_name">{{Auth::user()->profile_image}}</span>
								  										<!-- <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em> -->
								  									</div>
								  								</div>
								  							</li>
								  						</ul>
								  					</div>
								  				</fieldset>
								  			</div>
								  		</div>
								  	</div>
								  	<div class="wt-bannerphoto wt-tabsinfo">
								  		<div class="wt-tabscontenttitle">
								  			<h2>Banner Photo</h2>
								  		</div>
								  		<div class="wt-profilephotocontent">
								  			<!-- <div class="wt-description">
								  				<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua aut enim ad minim veniamac quis nostrud exercitation ullamco laboris.</p>
								  			</div> -->
								  			<div class="wt-formtheme wt-formprojectinfo wt-formcategory">
								  				<fieldset>
								  					<div class="form-group form-group-label">
								  						<div class="wt-labelgroup">
								  							<label for="filew">
								  								<span class="wt-btn">Select Files</span>
								  								<input type="file" name="cover_image" id="filew" onchange="coverImage(this);" form="edit-profile-form">
								  							</label>
								  							<span>file upload</span>
								  							<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
								  						</div>
								  					</div>
								  					<div class="form-group">
								  						<ul class="wt-attachfile wt-attachfilevtwo">
								  							<li class="wt-uploadingholder">
								  								<div class="wt-uploadingbox">
								  									<div class="wt-designimg">
								  										<input id="demoq" type="radio" name="employees" value="company" checked="">
								  										<label for="demoq">
								  											@if(Auth::user()->cover_image)
								  											<img src="{{asset('assets/images/user/cover/'.Auth::user()->cover_image)}}" id="cover" alt="img description">
								  											@else
								  											<img id="cover" src="{{asset('assets/images/company/img-10.jpg')}}" alt="img description">
								  											@endif
								  											<i class="fa fa-check"></i>
								  										</label>
								  									</div>
								  									<div class="wt-uploadingbar">
								  										<span class="uploadprogressbar"></span>
								  										<span id="covrimg_name">Banner Photo.jpg</span>
								  										<!-- <em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em> -->
								  									</div>
								  								</div>
								  							</li>
								  						</ul>
								  					</div>
								  				</fieldset>
								  			</div>
								  		</div>
								  	</div>
								  	<div class="wt-location wt-tabsinfo">
								  		<div class="wt-tabscontenttitle">
								  			<h2>Your Location</h2>
								  		</div>
								  		<div class="wt-formtheme wt-userform">
								  			<fieldset style="overflow: initial;">
								  				<div class="form-group form-group-half">
								  					<span class="wt-select">
								  						<select name="country" form="edit-profile-form" class="chosen-select">
								  							@foreach($countries as $country)
								  							<option value="{{$country->name}}"  @if(Auth::user()) {{Auth::user()->country == $country->name ? 'selected="selected"' : ''}} @endif>{{$country->name}}</option>
								  							@endforeach
								  						</select>
								  					</span>
								  				</div>
								  				<div class="form-group form-group-half">
								  					<input type="text" name="address" class="form-control" placeholder="Your Address" form="edit-profile-form" value="{{Auth::user()->address}}">
								  				</div>
								  			</fieldset>
								  		</div>
								  	</div>
								  	<div class="wt-skills">
								  		<div class="wt-tabscontenttitle">
								  			<h2>My Skills</h2>
								  		</div>
								  		<div class="wt-skillscontent-holder">
								  			<form class="wt-formtheme wt-skillsform" id="add_skill">
								  				@csrf
								  				<input type="hidden" name="user_id" value="{{Auth::user()->id}}">
								  				<fieldset>
								  					<div class="form-group">
								  						<div class="form-group-holder">
								  							<span class="wt-select">
								  								<select name="skill_id">
								  									<option value="">Select Your Skill</option>
								  									@foreach($skills as $skill)
								  									<option value="{{$skill->id}}">{{$skill->skill_name}}</option>
								  									@endforeach
								  								</select>
								  							</span>
								  							<input type="number" name="skill_rate" class="form-control" placeholder="Rate Your Skill (0% to 100%)">
								  						</div>
								  					</div>
								  					<div class="form-group wt-btnarea">
								  						<button type="submit" class="wt-btn">Add Skills</button>
								  					</div>
								  				</fieldset>
								  			</form>
								  			<div class="wt-myskills">
								  				<ul class="sortable list" id="userskilss">
								  					@foreach($user_skills as $key => $user_skill)
								  					<li id="userSkill{{$user_skill->id}}">
								  						<!-- <div class="wt-dragdroptool">
								  							<a href="javascript:void(0)" class="fal fa-bars"></a>
								  						</div> -->
								  						<span class="skill-dynamic-html">{{$user_skill->skillData->skill_name}} (<em class="skill-val">{{$user_skill->skill_rate}}</em>%)</span>
								  						<span class="skill-dynamic-field">
								  							<input type="text" name="skills[1][percentage]" value="{{$user_skill->skill_rate}}">
								  						</span>
								  						<div class="wt-rightarea">
								  							<!-- <a href="javascript:void(0);" class="wt-addinfo" onclick="updateSkill({{$user_skill->id}})"><i class="fal fa-pencil"></i></a> -->
								  							<a href="javascript:void(0);" class="wt-deleteinfo" onclick="deleteSkill({{$user_skill->id}})"><i class="fal fa-trash-alt"></i></a>
								  						</div>
								  					</li>
								  					@endforeach
								  				</ul>
								  			</div>
								  		</div>
								  	</div>
								  	<div class="wt-updatall shadow-none mt-5">
								  		<button type="submit" id="update_profile" form="edit-profile-form" class="wt-btn">Save &amp; Update</button>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								  	<div class="wt-userexperience wt-tabsinfo">
								  		<div class="wt-tabscontenttitle wt-addnew">
								  			<h2>Add Your Experience</h2>
								  			<a href="javascript:void(0);" id="addExperience" data-bs-toggle="collapse" data-bs-target="#addexperience" aria-expanded="true">Add New</a>
								  		</div>
								  		<div class="wt-collapseexp collapse" id="addexperience" aria-labelledby="accordioninnertitle" data-parent="#accordion">
									  		<form class="wt-formtheme wt-userform" id="add-experience-form">
									  			@csrf
									  			<fieldset>
									  				<div class="form-group form-group-half">
									  					<input type="text" name="company_title" class="form-control" placeholder="Company Title">
									  				</div>
									  				<div class="form-group form-group-half">
									  					<input type="date" name="start_date" class="form-control" placeholder="Starting Date">
									  				</div>
									  				<div class="form-group form-group-half">
									  					<input type="date" name="end_date" class="form-control" placeholder="Ending Date">
									  				</div>
									  				<div class="form-group form-group-half">
									  					<input type="text" name="job_title" class="form-control" placeholder="Your Job Title">
									  				</div>
									  				<div class="form-group">
									  					<textarea name="job_description" class="form-control" placeholder="Your Job Description"></textarea>
									  				</div>
									  				<div class="form-group">
									  					<span>* Leave ending date empty if its your current job</span>
									  				</div>
									  				<div class="form-group mt-3 text-end">
									  					<button type="submit" class="wt-btn">Save</button>
									  				</div>
									  			</fieldset>
									  		</form>
									  	</div>
								  		<ul class="wt-experienceaccordion accordion">
								  			@foreach($experience as $exper)
								  			<li id="expernc{{$exper->id}}">
								  				<div class="wt-accordioninnertitle">
								  					<span id="accordioninner{{$exper->id}}" data-bs-toggle="collapse" data-bs-target="#inner{{$exper->id}}"><span id="title{{$exper->id}}">{{$exper->job_title}}</span><span class="text-muted" id="start{{$exper->id}}"><em> ({{$exper->start_date}}</em></span> - <span class="text-muted" id="end{{$exper->id}}"><em>{{$exper->end_date}})</em></span></span>
								  					<div class="wt-rightarea">
								  						<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioninner{{$exper->id}}" data-bs-toggle="collapse" data-bs-target="#inner{{$exper->id}}" aria-expanded="true"><i class="fal fa-pencil"></i></a>
								  						<a href="javascript:void(0);" onclick="deleteExperience({{$exper->id}})" class="wt-deleteinfo"><i class="fal fa-trash-alt"></i></a>
								  					</div>
								  				</div>
								  				<div class="wt-collapseexp collapse" id="inner{{$exper->id}}" aria-labelledby="accordioninnertitle" data-parent="#accordion">
								  					<div class="wt-formtheme wt-userform">
								  						<input type="hidden" name="id" id="experienceId{{$exper->id}}" value="{{$exper->id}}">
								  						<input type="hidden" name="_token" id="experienceId{{$exper->id}}" value="{{$exper->id}}">
								  						<fieldset>
								  							<div class="form-group form-group-half">
								  								<input type="text" id="company_title{{$exper->id}}" name="company_title" class="form-control" placeholder="Company Title" value="{{$exper->company_title}}">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="date" id="start_date{{$exper->id}}" name="start_date" value="{{$exper->start_date}}" class="form-control" placeholder="Starting Date">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="date" id="end_date{{$exper->id}}" name="end_date" value="{{$exper->end_date}}" class="form-control" placeholder="Ending Date ">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="text" id="job_title{{$exper->id}}" name="job_title" value="{{$exper->job_title}}" class="form-control" placeholder="Your Job Title">
								  							</div>
								  							<div class="form-group">
								  								<textarea name="job_description" id="job_description{{$exper->id}}" class="form-control" placeholder="Your Job Description">{{$exper->job_description}}</textarea>
								  							</div>
								  							<div class="form-group">
								  								<span>* Leave ending date empty if its your current job</span>
								  							</div>
								  							<div class="form-group mt-3 text-end">
								  								<button onclick="editExperience({{$exper->id}})" class="wt-btn">Edit Experience</button>
								  							</div>
								  						</fieldset>
								  					</div>
								  				</div>
								  			</li>
								  			@endforeach
								  		</ul>
								  	</div>
								  	<div class="wt-userexperience">
								  		<div class="wt-tabscontenttitle wt-addnew">
								  			<h2>Add Your Education</h2>
								  			<a href="javascript:void(0);" id="addEducation" data-bs-toggle="collapse" data-bs-target="#addeducation" aria-expanded="true">Add New</a>
								  		</div>
								  		<div class="wt-collapseexp collapse" id="addeducation" aria-labelledby="addEducation" data-parent="#accordion">
								  			<form class="wt-formtheme wt-userform" id="add-education-form">
								  				@csrf
								  				<fieldset>
								  					<div class="form-group form-group-half">
								  						<input type="text" name="institute" class="form-control" placeholder="School/College/University">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="date" name="start_date" class="form-control" placeholder="From Date">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="date" name="end_date" class="form-control" placeholder="To Date ">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="text" name="degree" class="form-control" placeholder="Your Degree Title">
								  					</div>
								  					<div class="form-group">
								  						<input type="text" name="area_of_study" class="form-control" placeholder="Ex: Computer Science">
								  					</div>
								  					<div class="form-group">
								  						<textarea name="description" class="form-control" placeholder="Your Degree Description"></textarea>
								  					</div>
								  					<div class="form-group mt-3 text-end">
								  						<button type="submit" id="add-education" class="wt-btn">Save Education</button>
								  					</div>
								  				</fieldset>
								  			</form>
								  		</div>
								  		<ul class="wt-experienceaccordion accordion">
								  			@foreach($education as $educ)
								  			<li id="educatn{{$educ->id}}">
								  				<div class="wt-accordioninnertitle">
								  					<span id="accordioneducation{{$educ->id}}" data-toggle="collapse" data-target="#innertitleeduc{{$educ->id}}"><span id="degree{{$educ->id}}">{{$educ->degree}}</span> <span id="start_edu{{$educ->id}}"><em>({{$educ->start_date}}</em></span> - <span id="end_edu{{$educ->id}}"><em> {{$educ->end_date}})</em></span></span>
								  					<div class="wt-rightarea">
								  						<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" id="accordioneducation{{$educ->id}}" data-bs-toggle="collapse" data-bs-target="#innertitleeduc{{$educ->id}}" aria-expanded="true"><i class="fal fa-pencil"></i></a>
								  						<a href="javascript:void(0);" class="wt-deleteinfo" onclick="deleteEducation({{$educ->id}})"><i class="fal fa-trash-alt"></i></a>
								  					</div>
								  				</div>
								  				<div class="wt-collapseexp collapse" id="innertitleeduc{{$educ->id}}" aria-labelledby="accordioneducation{{$educ->id}}" data-parent="#accordion">
								  					<div class="wt-formtheme wt-userform">
								  						<fieldset>
								  							<input type="hidden" name="educaId" value="{{$educ->id}}">
										  					<div class="form-group form-group-half">
										  						<input type="text" name="institute" id="institute{{$educ->id}}" class="form-control" placeholder="School/College/University" value="{{$educ->institute}}">
										  					</div>
										  					<div class="form-group form-group-half">
										  						<input type="date" name="start_date" id="start_date_edu{{$educ->id}}" class="form-control" placeholder="From Date" value="{{$educ->start_date}}">
										  					</div>
										  					<div class="form-group form-group-half">
										  						<input type="date" name="end_date" id="end_date_edu{{$educ->id}}" class="form-control" placeholder="To Date " value="{{$educ->end_date}}">
										  					</div>
										  					<div class="form-group form-group-half">
										  						<input type="text" name="degree" id="degree_edu{{$educ->id}}" class="form-control" placeholder="Your Degree Title" value="{{$educ->degree}}">
										  					</div>
										  					<div class="form-group">
										  						<input type="text" name="area_of_study" id="area_of_study{{$educ->id}}" class="form-control" placeholder="Ex: Computer Science" value="{{$educ->area_of_study}}">
										  					</div>
										  					<div class="form-group">
										  						<textarea name="description" id="degree_desc{{$educ->id}}" class="form-control" placeholder="Your Degree Description">{{$educ->description}}</textarea>
										  					</div>
										  					<div class="form-group mt-3 text-end">
										  						<button onclick="editEducation({{$educ->id}})" class="wt-btn">Edit Education</button>
										  					</div>
										  				</fieldset>
								  					</div>
								  				</div>
								  			</li>
								  			@endforeach
								  		</ul>
								  	</div>
								  </div>
								  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								  	<div class="wt-addprojectsholder wt-tabsinfo">
								  		<div class="wt-tabscontenttitle wt-addnew">
								  			<h2>Add Your Projects</h2>
								  			<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#addProject">Add New</a>
								  		</div>
								  		<div class="wt-collapseexp collapse" id="addProject" aria-labelledby="addProject" data-bs-parent="#accordion">
								  			<form class="wt-formtheme wt-userform wt-formprojectinfo" id="add-project-form">
								  				@csrf
								  				<fieldset>
								  					<div class="form-group form-group-half">
								  						<input type="text" name="project_title" class="form-control" placeholder="Project Title">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="text" name="project_url" class="form-control" placeholder="Project URL">
								  					</div>
								  					<div class="form-group form-group-label wt-infouploading">
								  						<div class="wt-labelgroup">
								  							<label for="filen">
								  								<span class="wt-btn">Select Files</span>
								  								<input type="file" name="project_img" onchange="projectImage(this);" id="filen">
								  							</label>
								  							<span>Files Upload</span>
								  							<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
								  						</div>
								  					</div>
								  					<div class="form-group">
								  						<ul class="wt-attachfile">
								  							<li class="wt-uploading">
								  								<span id="projectimg_name">Logo.jpg</span>
								  								<em>File size: <span id="projectImg_size">300 kb</span></em>
								  							</li>
								  						</ul>
								  					</div>
								  					<div class="form-group">
								  						<textarea name="project_desc" class="form-control" placeholder="Project Description"></textarea>
								  					</div>
								  					<div class="form-group wt-btnarea text-end">
								  						<button type="submit" class="wt-btn">Save</button>
								  					</div>
								  				</fieldset>
								  			</form>
								  		</div>
								  		<ul class="wt-experienceaccordion accordion">
								  			@foreach($projects as $project)
								  			<li id="projecList{{$project->id}}">
								  				<div class="wt-accordioninnertitle">
								  					<div class="wt-projecttitle collapsed" data-bs-toggle="collapse" data-bs-target="#innerproject{{$project->id}}" aria-expanded="false" aria-controls="innerproject{{$project->id}}">
								  						<figure><img src="{{asset('assets/images/projects/'.$project->project_img)}}" alt="img description"></figure>
								  						<h3>
								  							<font id="projectName{{$project->id}}">{{$project->project_title}}</font><span id="projectUrl{{$project->id}}">{{$project->project_url}}</span></h3>
								  					</div>
								  					<div class="wt-rightarea">
								  						<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-bs-toggle="collapse" data-bs-target="#innerproject{{$project->id}}"><i class="fal fa-pencil"></i></a>
								  						<a href="javascript:void(0);" onclick="deleteProject({{$project->id}})" class="wt-deleteinfo"><i class="fal fa-trash-alt"></i></a>
								  					</div>
								  				</div>
								  				<div class="wt-collapseexp collapse" id="innerproject{{$project->id}}" aria-labelledby="accordioninnerproject{{$project->id}}" data-bs-parent="#accordion">
								  					<div class="wt-formtheme wt-userform wt-formprojectinfo">
								  						<fieldset>
								  							<div class="form-group form-group-half">
								  								<input type="text" id="project_title{{$project->id}}" name="project_title" class="form-control" placeholder="Project Title" value="{{$project->project_title}}">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="text" name="project_url" id="project_url{{$project->id}}" class="form-control" placeholder="Project URL" value="{{$project->project_url}}">
								  							</div>
								  							<div class="form-group form-group-label wt-infouploading">
								  								<div class="wt-labelgroup">
								  									<label for="filen{{$project->id}}">
								  										<span class="wt-btn">Select Files</span>
								  										<input type="file" name="project_img" onchange="projectImageEdit(this,{{$project->id}});" id="filen{{$project->id}}">
								  									</label>
								  									<span>Drop files here to upload</span>
								  									<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
								  								</div>
								  							</div>
								  							<div class="form-group">
								  								<ul class="wt-attachfile">
								  									<li class="wt-uploading">
								  										<span id="projectimg_name{{$project->id}}">{{$project->project_img}}</span>
								  								<em>File size: <span id="projectImg_size{{$project->id}}">300 kb</span></em>
								  									</li>
								  								</ul>
								  							</div>
								  							<div class="form-group">
								  								<textarea name="project_desc" id="project_desc{{$project->id}}" class="form-control" placeholder="Project Description">{{$project->project_desc}}</textarea>
								  							</div>
								  							<div class="form-group wt-btnarea">
								  								<button onclick="editProject({{$project->id}})" class="wt-btn">Save</button>
								  							</div>
								  						</fieldset>
								  					</div>
								  				</div>
								  			</li>
								  			@endforeach
								  		</ul>
								  	</div>
								  	<div class="wt-addprojectsholder">
								  		<div class="wt-tabscontenttitle wt-addnew">
								  			<h2>Add Your Certification</h2>
								  			<a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#addCertificate">Add New</a>
								  		</div>
								  		<div class="wt-collapseexp collapse" id="addCertificate" aria-labelledby="accordioninnerCertificate" data-parent="#accordion">
								  			<form class="wt-formtheme wt-userform wt-formprojectinfo" id="add-certificate-form">
								  				@csrf
								  				<fieldset>
								  					<div class="form-group">
								  						<input type="text" name="certificate_title" class="form-control" placeholder="Certificate Title">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="date" name="issue_date" class="form-control" placeholder="Issue Date">
								  					</div>
								  					<div class="form-group form-group-half">
								  						<input type="date" name="expire_date" class="form-control" placeholder="Expire Date">
								  					</div>
								  					<div class="form-group">
								  						<textarea name="certificate_desc" id="" class="form-control" placeholder="Certificate Description"></textarea>
								  					</div>
								  					<div class="form-group wt-btnarea">
								  						<button type="submit" class="wt-btn">Save</button>
								  					</div>
								  				</fieldset>
								  			</form>
								  		</div>
								  		<ul class="wt-experienceaccordion accordion">
								  			@foreach($certifications as $certificate)
								  			<li id="certifcateList{{$certificate->id}}">
								  				<div class="wt-accordioninnertitle">
								  					<div class="wt-projecttitle collapsed" data-bs-toggle="collapse" data-bs-target="#innertitlecwcertificate{{$certificate->id}}">
								  						
								  						<h3><font id="certificateName{{$certificate->id}}">{{$certificate->certificate_title}}</font><samp id="certificateDate{{$certificate->id}}">{{$certificate->issue_date}}</samp></h3>
								  					</div>
								  					<div class="wt-rightarea">
								  						<a href="javascript:void(0);" class="wt-addinfo wt-skillsaddinfo" data-bs-toggle="collapse" data-bs-target="#innertitlecwcertificate{{$certificate->id}}"><i class="fal fa-pencil"></i></a>
								  						<a href="javascript:void(0);" onclick="deleteCertificate({{$certificate->id}})" class="wt-deleteinfo"><i class="fal fa-trash-alt"></i></a>
								  					</div>
								  				</div>
								  				<div class="wt-collapseexp collapse" id="innertitlecwcertificate{{$certificate->id}}" aria-labelledby="accordioninnertitle1" data-parent="#accordion">
								  					<div class="wt-formtheme wt-userform wt-formprojectinfo">
								  						<fieldset>
								  							<div class="form-group">
								  								<input type="text" id="certificate_title{{$certificate->id}}" name="certificate_title" class="form-control" value="{{$certificate->certificate_title}}" placeholder="Certificate Title">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="date" id="issue_date{{$certificate->id}}" name="issue_date" value="{{$certificate->issue_date}}" class="form-control" placeholder="Issue Date">
								  							</div>
								  							<div class="form-group form-group-half">
								  								<input type="date" id="expire_date{{$certificate->id}}" name="expire_date" class="form-control" value="{{$certificate->expire_date}}" placeholder="Expire Date">
								  							</div>
								  							<div class="form-group">
								  								<textarea name="certificate_desc" id="certificate_desc{{$certificate->id}}" id="" class="form-control" placeholder="Certificate Description">{{$certificate->certificate_desc}}</textarea>
								  							</div>
								  							<div class="form-group wt-btnarea">
								  								<button onclick="editCertificate({{$certificate->id}})" class="wt-btn">Save</button>
								  							</div>
								  						</fieldset>
								  					</div>
								  				</div>
								  			</li>
								  			@endforeach
								  		</ul>
								  	</div>
								  </div>
								</div>
							</div>
						</div>
						<!-- <div class="wt-updatall">
							<i class="ti-announcement"></i>
							<span>Update all the latest changes made by you, by just clicking on “Save &amp; Continue” button.</span>
							<a class="wt-btn" href="javascript:void(0);">Save &amp; Update</a>
						</div> -->
					</div>
				</div>
			</section>
			<!--Register Form End-->
		</main>
		<!--Main End-->
	</div>
</div>
@endsection
@section('script')
<script>
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
 $('#add_skill').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('add_skill') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$('#userskilss').append('<li id="userSkill'+data.id+'"><span class="skill-dynamic-html">'+data.skill_data.skill_name+' (<em class="skill-val">'+data.skill_rate+'</em>%)</span><span class="skill-dynamic-field"><input type="text" name="skills[1][percentage]" value="'+data.skill_rate+'"></span><div class="wt-rightarea"><a href="javascript:void(0);" class="wt-deleteinfo" onclick="deleteSkill('+data.id+')"><i class="fal fa-trash-alt"></i></a></div></li>');
	     	// window.location.href = "{{url('manage-orders')}}"
	     	// $('.added-questions').append(data);
	     	// $('#requirements-form textarea').val('');
    	}
   	})
	});

 $('#edit-profile-form').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('edit-profile') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$('#pills-home-tab').removeClass('active');
	    	$('#pills-profile-tab').addClass('active');
	    	$('#pills-home').removeClass('show active');
	    	$('#pills-profile').addClass('show active');
    	}
   	})
	});

 $('#add-experience-form').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('add-experience') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$("#add-experience-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	});

 $('#add-education-form').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('add-education') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$("#add-education-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	});

 $('#add-project-form').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('add-project') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$("#add-project-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	});

 $('#add-certificate-form').on('submit', function(event){
   	event.preventDefault();
   	

   	$.ajax({
	    url:"{{ url('add-certificate') }}",
	    method:"POST",
	    data:new FormData(this),
	    dataType:'JSON',
	    contentType: false,
	    cache: false,
	    processData: false,
	    success:function(data){
	    	console.log(data);
	    	$("#add-certificate-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	});

 	function updateSkill(id){
 		alert(id);
 	}

 	function deleteSkill(id){
 		alert(id);
	   	
 	   	$.ajax({
 		    url:"{{ url('delete-skill') }}/"+id,
 		    type: 'DELETE',
 	      data: {
 	      		"_token": CSRF_TOKEN,
 	          "id": id
 	      },
 	      success: function (){
 	        $('#userSkill'+id).remove();
 	      }
 	   	})
 	}
 	function profileImage(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function (e) {
            $('#profile')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    var filename = $('#filep').val().split('\\').pop();
    $('#img_name').html(filename);
   
	}
 	function coverImage(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function (e) {
            $('#cover')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
    var filename = $('#filew').val().split('\\').pop();
    $('#covrimg_name').html(filename);
   
	}

 	function projectImage(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function (e) {
            $('#projectImg')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);

        var _size = input.files[0].size;
          var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
      		i=0;while(_size>900){_size/=1024;i++;}
          var exactSize = (Math.round(_size*100)/100)+' '+fSExt[i];
      	$('#projectImg_size').html(exactSize)
    }
    var filename = $('#filen').val().split('\\').pop();
    $('#projectimg_name').html(filename);
    
	}
 	function projectImageEdit(input,id) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        console.log(reader);
        reader.onload = function (e) {
            $('#projectImg'+id)
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);

        var _size = input.files[0].size;
          var fSExt = new Array('Bytes', 'KB', 'MB', 'GB'),
      		i=0;while(_size>900){_size/=1024;i++;}
          var exactSize = (Math.round(_size*100)/100)+' '+fSExt[i];
      	$('#projectImg_size'+id).html(exactSize)
    }
    var filename = $('#filen'+id).val().split('\\').pop();
    $('#projectimg_name'+id).html(filename);
    
	}

	function deleteExperience(id){
   	$.ajax({
	    url:"{{ url('delete-experience') }}/"+id,
	    type: 'DELETE',
      data: {
      		"_token": CSRF_TOKEN,
          "id": id
      },
      success: function (){
        $('#expernc'+id).remove();
      }
   	})
	}
	function editExperience(id){
		var title = $('#job_title'+id).val();
		var start = $('#start_date'+id).val();
		var end = $('#end_date'+id).val();
   	$.ajax({
	    url:"{{ url('edit-experience') }}",
	    method: 'POST',
      data: {
    		"_token": CSRF_TOKEN,
        "id": id,
        "company_title": $('#company_title'+id).val(),
        "start_date": $('#start_date'+id).val(),
        "end_date": $('#end_date'+id).val(),
        "job_title": $('#job_title'+id).val(),
        "job_description": $('#job_description'+id).val(),
      },
      success: function (){
        $('#title'+id).html($('#job_title'+id).val());
        $('#start'+id).html('<span class="text-muted" id="start'+id+'"><em>('+start+'</em></span>');
        $('#end'+id).html('<span class="text-muted" id="end'+id+'"><em>'+end+')</em></span>');
      }
   	})
	}

	function editEducation(id){
		var degree = $('#degree_edu'+id).val();
		// alert(degree);
		var start = $('#start_date_edu'+id).val();
		var end = $('#end_date_edu'+id).val();
   	$.ajax({
	    url:"{{ url('edit-education') }}",
	    method: 'POST',
      data: {
    		"_token": CSRF_TOKEN,
        "id": id,
        "institute": $('#institute'+id).val(),
        "start_date": $('#start_date_edu'+id).val(),
        "end_date": $('#end_date_edu'+id).val(),
        "degree": $('#degree_edu'+id).val(),
        "area_of_study": $('#area_of_study'+id).val(),
        "description": $('#degree_desc'+id).val(),
      },
      success: function (){
        $('#degree'+id).html($('#degree_edu'+id).val());
        $('#start_edu'+id).html('<span class="text-muted" id="start'+id+'"><em>('+start+'</em></span>');
        $('#end_edu'+id).html('<span class="text-muted" id="end'+id+'"><em>'+end+')</em></span>');
      }
   	})
	}
	function deleteEducation(id){
   	$.ajax({
	    url:"{{ url('delete-education') }}/"+id,
	    type: 'DELETE',
      data: {
      		"_token": CSRF_TOKEN,
          "id": id
      },
      success: function (){
        $('#educatn'+id).remove();
      }
   	})
	}

	function editProject(id){
		var project_url = $('#project_url'+id).val();
		var img = $('#filen'+id)[0].files;
	
		var project_title = $('#project_title'+id).val();
		var postData = new FormData();
		postData.append('_token',CSRF_TOKEN);
		postData.append('id',id);
		postData.append('project_title',$('#project_title'+id).val());
		postData.append('project_url',$('#project_url'+id).val());
		postData.append('project_img',img);
		postData.append('project_desc',$('#project_desc'+id).val());
   	$.ajax({
	    url:"{{ url('edit-project') }}",
	    async:true,
	    type: 'POST',
	    contentType:false,
      data: postData,
      processData:false,
      success: function (){
        $('#projectName'+id).html(project_title);
        $('#projectUrl'+id).html(project_url);
        // $('#end_edu'+id).html('<span class="text-muted" id="end'+id+'"><em>'+end+')</em></span>');
      }
   	})
	}
	function deleteProject(id){
   	$.ajax({
	    url:"{{ url('delete-project') }}/"+id,
	    type: 'DELETE',
      data: {
      		"_token": CSRF_TOKEN,
          "id": id
      },
      success: function (){
        $('#projecList'+id).remove();
      }
   	})
	}


	function editCertificate(id){
		var issue_date = $('#issue_date'+id).val();
		
		var certificate_title = $('#certificate_title'+id).val();
		
   	$.ajax({
	    url:"{{ url('edit-certificate') }}",
      method: 'POST',
      data: {
    		"_token": CSRF_TOKEN,
        "id": id,
        "certificate_title": $('#certificate_title'+id).val(),
        "issue_date": $('#issue_date'+id).val(),
        "expire_date": $('#expire_date'+id).val(),
        "certificate_desc": $('#certificate_desc'+id).val(),
      },
      success: function (){
        $('#certificateName'+id).html(certificate_title);
        $('#certificateDate'+id).html(issue_date);
        // $('#end_edu'+id).html('<span class="text-muted" id="end'+id+'"><em>'+end+')</em></span>');
      }
   	})
	}
	function deleteCertificate(id){
   	$.ajax({
	    url:"{{ url('delete-certificate') }}/"+id,
	    type: 'DELETE',
      data: {
      		"_token": CSRF_TOKEN,
          "id": id
      },
      success: function (){
        $('#certifcateList'+id).remove();
      }
   	})
	}

	var config = {
		'.chosen-select'           : {},
		'.chosen-select-deselect'  : {allow_single_deselect:true},
		'.chosen-select-no-single' : {disable_search_threshold:10},
		'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
		'.chosen-select-width'     : {width:"95%"}
		}
		for (var selector in config) {
			jQuery(selector).chosen(config[selector]);
	}
</script>
@endsection