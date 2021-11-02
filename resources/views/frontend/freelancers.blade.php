@extends('frontend.layouts.app')
@section('style')
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/owl.carousel.min.css') }}">
@endsection
@section('content')
<!--Inner Home Banner Start-->
<div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>Search Result</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li class="wt-active">Freelancers</li>
				</ol>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="wt-categoriesslider-holder wt-haslayout">
	<div class="wt-title">
		<h2>Browse Top Job Categories:</h2>
	</div>
	<div id="wt-categoriesslider" class="wt-categoriesslider owl-carousel">
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-01.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Graphic &amp; Design</a></h3>
				<span>Items: 523,112</span>
			</div>
		</div>
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-02.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Digital Marketing</a></h3>
				<span>Items: 523,112</span>
			</div>
		</div>
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-03.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Writing &amp; Translation</a></h3>
				<span>Items: 325,442</span>
			</div>
		</div>
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-04.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Video &amp; Animation</a></h3>
				<span>Items: 421,305</span>
			</div>
		</div>
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-05.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Music &amp; Audio</a></h3>
				<span>Items: 421,305</span>
			</div>
		</div>
		<div class="wt-categoryslidercontent item">
			<figure><img src="{{asset('assets/images/categories/slider/img-01.png')}}" alt="image description"></figure>
			<div class="wt-cattitle">
				<h3><a href="javascrip:void(0);">Programing &amp; Tech</a></h3>
				<span>Items: 421,305</span>
			</div>
		</div>
	</div>
</div> -->
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<div class="wt-main-section wt-haslayout">
		<!-- User Listing Start-->
		<div class="wt-haslayout">
			<div class="container">
				<div id="wt-twocolumns" class="row wt-twocolumns wt-haslayout">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4">
						<div class="wt-usersidebaricon">
							<span class="fa fa-cog wt-usersidebardown">
								<i></i>
							</span>
						</div>
						<aside id="wt-sidebar" class="wt-sidebar wt-usersidebar">
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Categories</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<!-- <fieldset>
											<div class="form-group">
												<input type="text" name="Search" class="form-control" placeholder="Search Category">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset> -->
										<fieldset>
											<div class="wt-checkboxholder wt-verticalscrollbar">
												<span class="wt-radio">
													<input id="all" type="radio" name="user_tagline" value="all" checked>
													<label for="all"> All</label>
												</span>
												<span class="wt-radio">
													<input id="wordpress" type="radio" name="user_tagline" value="WordPress Developer">
													<label for="wordpress"> WordPress Developer</label>
												</span>
												<span class="wt-radio">
													<input id="graphic" type="radio" name="user_tagline" value="Graphic Designer">
													<label for="graphic"> Graphic Designer</label>
												</span>
												<span class="wt-radio">
													<input id="website" type="radio" name="user_tagline" value="Web Developer">
													<label for="website"> Web Developer</label>
												</span>
												<span class="wt-radio">
													<input id="article" type="radio" name="user_tagline" value="Content Writer">
													<label for="article"> Content Writer</label>
												</span>
												<span class="wt-radio">
													<input id="software" type="radio" name="user_tagline" value="Full Stack Developer">
													<label for="software"> Full Stack Developer</label>
												</span>
												<span class="wt-radio">
													<input id="wordpress1" type="radio" name="user_tagline" value="Frontend Developer">
													<label for="wordpress1"> Frontend Developer</label>
												</span>
												<span class="wt-radio">
													<input id="php" type="radio" name="user_tagline" value="Php Developer">
													<label for="php"> Php Developer</label>
												</span>
												<span class="wt-radio">
													<input id="laravel" type="radio" name="user_tagline" value="Laravel Developer">
													<label for="laravel"> Laravel Developer</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<!-- <div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Location</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="wt-checkboxholder wt-verticalscrollbar">
												<span class="wt-checkbox">
													<input id="wt-description" type="checkbox" name="description" value="company" checked>
													<label for="wt-description"> <img src="{{asset('assets/images/flag/img-01.png')}}" alt="img description"> Australia</label>
												</span>
												<span class="wt-checkbox">
													<input id="us" type="checkbox" name="description" value="company">
													<label for="us"> <img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description"> United States</label>
												</span>
												<span class="wt-checkbox">
													<input id="canada" type="checkbox" name="description" value="company">
													<label for="canada"> <img src="{{asset('assets/images/flag/img-03.png')}}" alt="img description"> Canada</label>
												</span>
												<span class="wt-checkbox">
													<input id="england" type="checkbox" name="description" value="company">
													<label for="england"> <img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</label>
												</span>
												<span class="wt-checkbox">
													<input id="emirates" type="checkbox" name="description" value="company">
													<label for="emirates"> <img src="{{asset('assets/images/flag/img-05.png')}}" alt="img description"> United Emirates</label>
												</span>
												<span class="wt-checkbox">
													<input id="wt-description1" type="checkbox" name="description" value="company">
													<label for="wt-description1"> <img src="{{asset('assets/images/flag/img-01.png')}}" alt="img description"> Australia</label>
												</span>
												<span class="wt-checkbox">
													<input id="us1" type="checkbox" name="description" value="company">
													<label for="us1"> <img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description"> United States</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div> -->
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Hourly Rate</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="wt-checkboxholder wt-verticalscrollbar">
												<span class="wt-radio">
													<input id="rate1" type="radio" name="hourly_rate" value="9">
													<label for="rate1">$10 and below</label>
												</span>
												<span class="wt-radio">
													<input id="rate2" type="radio" name="hourly_rate" value="10-30">
													<label for="rate2"> $10 - $30</label>
												</span>
												<span class="wt-radio">
													<input id="rate3" type="radio" name="hourly_rate" value="30-60">
													<label for="rate3"> $30 - $60</label>
												</span>
												<span class="wt-radio">
													<input id="rate4" type="radio" name="hourly_rate" value="60-90">
													<label for="rate4"> $60 - $90</label>
												</span>
												<span class="wt-radio">
													<input id="rate5" type="radio" name="hourly_rate" value="91">
													<label for="rate5"> $90 &amp;above</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<!-- <div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Languages</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="form-group">
												<input type="text" name="fullname" class="form-control" placeholder="Search Language">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset>
										<fieldset>
											<div class="wt-checkboxholder wt-verticalscrollbar">
												<span class="wt-checkbox">
													<input id="chinese" type="checkbox" name="description" value="company" checked>
													<label for="chinese">Chinese</label>
												</span>
												<span class="wt-checkbox">
													<input id="spanish" type="checkbox" name="description" value="company">
													<label for="spanish">Spanish</label>
												</span>
												<span class="wt-checkbox">
													<input id="english" type="checkbox" name="description" value="company">
													<label for="english">English</label>
												</span>
												<span class="wt-checkbox">
													<input id="arabic" type="checkbox" name="description" value="company">
													<label for="arabic">Arabic</label>
												</span>
												<span class="wt-checkbox">
													<input id="russian" type="checkbox" name="description" value="company">
													<label for="russian">Russian</label>
												</span>
												<span class="wt-checkbox">
													<input id="chinese1" type="checkbox" name="description" value="company">
													<label for="chinese1">Chinese</label>
												</span>
												<span class="wt-checkbox">
													<input id="spanish1" type="checkbox" name="description" value="company">
													<label for="spanish1">Spanish</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div> -->
							<div class="wt-widget wt-applyfilters-holder">
								<div class="wt-widgetcontent">
									<div class="wt-applyfilters">
										<span>Click Clear Filter” to clear latest<br> changes made by you.</span>
										<a href="javascript:void(0);" id="clearFilter" class="wt-btn">Clear Filters</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
						<div class="wt-userlistingholder wt-userlisting wt-haslayout" id="freelancers-list">
							<!-- <div class="wt-userlistingtitle">
								<span>01 - 48 of 57143 results for <em>"Logo Design"</em></span>
							</div> -->
							<!-- <div class="wt-filterholder">
								<ul class="wt-filtertag">
									<li class="wt-filtertagclear">
										<a href="javascrip:void(0)"><i class="fa fa-times"></i> <span>Clear All Filter</span></a>
									</li>
								 	<li class="alert alert-dismissable fade in">
										<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Graphic Design</span></a>
									</li>
									<li class="alert alert-dismissable fade in">
										<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Hourly Rate</span></a>
									</li>
									<li class="alert alert-dismissable fade in">
										<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Any Freelancer Type</span></a>
									</li>
									<li class="alert alert-dismissable fade in">
										<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>Chinese</span></a>
									</li>
									<li class="alert alert-dismissable fade in">
										<a href="javascrip:void(0)"><i class="fa fa-times close" data-dismiss="alert" aria-label="close"></i> <span>English</span></a>
									</li>
								</ul>
							</div> -->
							@foreach($freelancers as $freelancer)
							<div class="wt-userlistinghold">
								<figure class="wt-userlistingimg">
									@if($freelancer->profile_image != '')
									<img src="{{asset('assets/images/user/profile/'.$freelancer->profile_image)}}" alt="image description">
									@else
									<img src="{{asset('assets/images/user-login.png')}}" alt="image description">
									@endif
								</figure>
								<div class="wt-userlistingcontent">
									<div class="wt-contenthead">
										<div class="wt-title">
											<a href="{{ route('freelancers.show',$freelancer->username)}}"><i class="fa fa-check-circle"></i> {{$freelancer->first_name}} {{$freelancer->last_name}}
											</a>
											<h2>{{$freelancer->tagline}}</h2>
										</div>
										<ul class="wt-userlisting-breadcrumb">
											<li><span><i class="far fa-money-bill-alt"></i> ${{$freelancer->hourly_rate}}.00 / hr</span></li>
											<li><span><!-- <img src="{{asset('assets/images/flag/img-02.png')}}" alt="img description"> -->  {{$freelancer->country}}</span></li>
											@if(Auth::user())
											<li><a href="javascript:void(0);" onclick="saveUser({{$freelancer->id}})" class="wt-clicksave save{{$freelancer->id}}">
												
													<i class="fal fa-heart"></i> Save
													
											</a></li>
											@else
											<li><a href="javascript:void(0);" class="wt-clicksave save{{$freelancer->id}}"><i class="fal fa-heart"></i> Save</a></li>
											@endif
										</ul>
									</div>
									<div class="wt-rightarea">
										<span class="wt-starsvtwo">
											<i class="fa fa-star fill"></i>
											<i class="fa fa-star fill"></i>
											<i class="fa fa-star fill"></i>
											<i class="fa fa-star fill"></i>
											<i class="fa fa-star fill"></i>
										</span>
										<?php 
											$rating_avg = 0.0;
							        $total = 0;
						          foreach($freelancer->freelancerRating as $rating){
						            $total = $total + $rating->general_rating;
						            $rating_avg = $total/$freelancer->freelancer_rating_count;
						          }
										?>
										<span class="wt-starcontent">{{$rating_avg}}/<sub>5</sub> <em>({{$freelancer->freelancer_rating_count}} Feedback)</em></span>
									</div>
								</div>
								<div class="wt-description">
									<p>{{ \Illuminate\Support\Str::limit($freelancer->description, 200, $end='...') }}</p>
								</div>
								<div class="wt-tag wt-widgettag">
									@foreach($freelancer->userSkills as $skill)
									<a href="javascript:void(0);">{{ App\Models\User::skillTitle($skill->skill_id)->skill_name }}</a>
									@endforeach
								</div>
							</div>
							@endforeach
							
							{{ $freelancers->links('frontend.pagination.freelancers') }}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>
<!--Main End-->
@endsection
@section('script')
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script>
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

	function saveUser(id){
   	$.ajax({
	    url:"{{ url('save-freelancer') }}",
	    method:"POST",
	    data:{
	    	"_token": CSRF_TOKEN,
        "freelancer_id": id,
        "save_type": 'Freelancer',
      },
	    success:function(data){
	    	console.log(data);
	    	if (data == 1) {
	    		$('.save'+id).html('<i class="fa fa-heart"></i> Saved');
	    	}
	    	if(data == 2){
	    		$('.save'+id).html('<i class="fal fa-heart"></i> Save');
	    	}
	    	// $("#add-project-form")[0].reset();
	    	// $('#pills-home-tab').removeClass('active');
	    	// $('#pills-profile-tab').addClass('active');
	    	// $('#pills-home').removeClass('show active');
	    	// $('#pills-profile').addClass('show active');
    	}
   	})
	}

	$('input[name="hourly_rate"]').on('change', function(e){
		e.preventDefault();
		if($(this).is(":checked")){
			var hourly_rate = this.value;
		}
		// alert()
		if (hourly_rate != undefined || hourly_rate !='') {
			$.ajax({
			  url: "{{url('get-freelancers')}}",
			  type: 'get',
			  data: {hourly_rate:hourly_rate},
			  cache : false,
			  success:function(data){
			    // console.log(data);
			    $("#freelancers-list").html(data);
			  }
			});
		}	
	})

	$('input[name="user_tagline"]').on('change', function(e){
		e.preventDefault();
		if($(this).is(":checked")){
			var tagline = this.value;
		}
		// alert(tagline);
		if (tagline != undefined || tagline !='') {
			$.ajax({
			  url: "{{url('get-freelancers')}}",
			  type: 'get',
			  data: {tagline:tagline},
			  cache : false,
			  success:function(data){
			    // console.log(data);
			    $("#freelancers-list").html(data);
			  }
			});
		}	
	})

	$('#clearFilter').on('click', function(e){
		e.preventDefault();
		var clear = 'all';
		$.ajax({
		  url: "{{url('get-freelancers')}}",
		  type: 'get',
		  data: {clear:clear},
		  cache : false,
		  success:function(data){
		    // console.log(data);
		    $("#freelancers-list").html(data);
		  }
		});

	})
</script>
@endsection