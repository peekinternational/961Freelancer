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
			<section class="wt-haslayout wt-dbsectionspace">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-9">
						<div class="wt-dashboardbox">
							<div class="wt-dashboardboxtitle">
								<h2>Manage Jobs</h2>
							</div>
							<div class="wt-dashboardboxcontent wt-jobdetailsholder">
								<div class="wt-freelancerholder">
									<div class="wt-tabscontenttitle">
										<h2>Posted Jobs</h2>
									</div>
									<div class="wt-managejobcontent wt-verticalscrollbar">
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
														</a>
														<h2>Translation and Proof Reading (Multi Language)</h2>
													</div>
													<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
														<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
														<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
														<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
													</div>
													<div class="wt-hireduserstatus">
														<h4>01</h4><span>Proposals</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
														</a>
														<h2>Develop a transportation company website </h2>
													</div>
													<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
														<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
														<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
														<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
													</div>
													<div class="wt-hireduserstatus">
														<h4>04</h4><span>Proposals</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-03.jpg')}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
														</a>
														<h2>Change temp to Arabic and install on wordpress</h2>
													</div>
													<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
														<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
														<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
														<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
													</div>
													<div class="wt-hireduserstatus">
														<h4>150</h4><span>Proposals</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-03.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<span class="wt-featuredtag"><img src="{{asset('assets/images/joblisting/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style"></span>
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
														</a>
														<h2>Develop a transportation company website </h2>
													</div>
													<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
														<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
														<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
														<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
													</div>
													<div class="wt-hireduserstatus">
														<h4>06</h4><span>Proposals</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-03.jpg')}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> Louanne Mattioli
														</a>
														<h2>Website changes in HTML & PHP</h2>
													</div>
													<ul class="wt-saveitem-breadcrumb wt-userlisting-breadcrumb">
														<li><span class="wt-dashboraddoller"><i class="fa fa-dollar-sign"></i> Professional</span></li>
														<li><span><img src="{{asset('assets/images/flag/img-04.png')}}" alt="img description"> England</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksavefolder"><i class="far fa-folder"></i> Type: Per Fixed</a></li>
														<li><span class="wt-dashboradclock"><i class="far fa-clock"></i> Duration: 15 Days</span></li>															
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-btnarea">
														<a href="javascript:void(0);" class="wt-btn">VIEW DETAILS</a>
													</div>
													<div class="wt-hireduserstatus">
														<h4>243</h4><span>Proposals</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-03.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-02.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-05.jpg')}}" alt="img description"></figure></li>
															<li><figure><img src="{{asset('assets/images/user/userlisting/img-01.jpg')}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<nav class="wt-pagination wt-savepagination">
								<ul>
									<li class="wt-prevpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-left"></i></a></li>
									<li><a href="javascrip:void(0);">1</a></li>
									<li><a href="javascrip:void(0);">2</a></li>
									<li><a href="javascrip:void(0);">3</a></li>
									<li><a href="javascrip:void(0);">4</a></li>
									<li><a href="javascrip:void(0);">...</a></li>
									<li><a href="javascrip:void(0);">50</a></li>
									<li class="wt-nextpage"><a href="javascrip:void(0);"><i class="lnr lnr-chevron-right"></i></a></li>
								</ul>
							</nav>								
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-3">
						<aside id="wt-sidebar" class="wt-sidebar wt-dashboardsave">
							<div class="wt-proposalsr">
								<div class="wt-proposalsrcontent">
									<figure>
										<img src="{{asset('assets/images/thumbnail/img-17.png')}}" alt="image">
									</figure>
									<div class="wt-title">
										<h3>150</h3>
										<span>Total Ongoing Jobs</span>
									</div>
								</div> 
							</div>
							<div class="wt-proposalsr">
								<div class="wt-proposalsrcontent wt-componyfolow">
									<figure>
										<img src="{{asset('assets/images/thumbnail/img-16.png')}}" alt="image">
									</figure>
									<div class="wt-title">
										<h3>1406</h3>
										<span>Total Completed Jobs</span>
									</div>
								</div> 
							</div>								
							<div class="wt-proposalsr">
								<div class="wt-proposalsrcontent  wt-freelancelike">
									<figure>
										<img src="{{asset('assets/images/thumbnail/img-15.png')}}" alt="image">
									</figure>
									<div class="wt-title">
										<h3>2075</h3>
										<span>Total Cancelled Jobs</span>
									</div>
								</div> 
							</div>								
						</aside>
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
@endsection