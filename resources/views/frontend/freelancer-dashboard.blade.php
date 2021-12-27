@extends('frontend.layouts.app')
@section('dashboardstyle')
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/dashboard.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/dbresponsive.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/croppie.css') }}">
<script src="{{asset('assets/js/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
<style>
	.home-header{
		z-index: 29;
		background: #fff;
	}
	textarea:invalid {
	  border: 1px solid red;
	}
	textarea:invalid:focus {
	  border: 1px solid red;
	}
	textarea:valid:focus {
	  border: 1px solid green;
	}
	.dragBox {
	  width: 100%;
	  height: 56px;
	  margin: 0 auto;
	  position: relative;
	  text-align: center;
	  font-weight: bold;
	  line-height: 57px;
	  color: #999;
	  /*border: 2px dashed #ccc;*/
	  display: inline-block;
	  transition: transform 0.3s;
	}
	.dragBox input[type="file"] {
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: 0;
    top: 0;
    left: 0;
  }
	.draging {
	  transform: scale(1.1);
	}
	#preview {
	  text-align: center;
	}
	#preview img {
	  max-width: 100%
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
			<section class="wt-haslayout wt-dbsectionspace wt-insightuser">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
						<div class="wt-dashboardbox">
							<div class="wt-dashboardboxtitle wt-yeartag">
								<h2>Total Earnings</h2>
								<div class="wt-tag wt-widgettag">
									<a href="javascript:void(0);">2019</a>
									<a href="javascript:void(0);">2018</a>
									<a href="javascript:void(0);">2017</a>
								</div>
							</div>
							<div class="wt-dashboardboxcontent">
								<div class="wt-jobchartholder">
									<canvas id="wt-jobchart" class="wt-jobchart"></canvas>
								</div>
							</div>
						</div>
						<div class="wt-dashboardbox wt-earningsholder">
							<div class="wt-dashboardboxtitle wt-titlewithsearch">
								<h2>Past Earnings</h2>
								<!-- <form class="wt-formtheme wt-formsearch">
									<fieldset>
										<div class="form-group">
											<input type="text" name="Search" class="form-control" placeholder="Search Here">
											<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
										</div>
									</fieldset>
								</form> -->
							</div>
							<div class="wt-dashboardboxcontent">
								<table class="wt-tablecategories">
									<thead>
										<tr>
											<th>Project Title</th>
											<th>Date</th>
											<th>Earnings</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>I want some customization and installation on wordpress</td>
											<td>February 3, 2019</td>
											<td>$19.00</td>
										</tr>
										<tr>
											<td>Develop a transportation company website</td>
											<td>January 12, 2019</td>
											<td>$350.00</td>
										</tr>
										<tr>
											<td>Change temp to Arabic and install on wordpress</td>
											<td>December 16, 2018</td>
											<td>$120.00</td>
										</tr>
										<tr>
											<td>I want some customization and installation on wordpress</td>
											<td>November 18, 2018</td>
											<td>$60.00</td>
										</tr>
										<tr>
											<td>Website changes in HTML &amp; PHP</td>
											<td>October 24, 2018</td>
											<td>$50.00</td>
										</tr>
										<tr>
											<td>I want some customization and installation on wordpress</td>
											<td>October 21, 2018</td>
											<td>$240.00</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="ccol-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
						<div class="row">
							<div class="wt-insightsitemholder row">
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-insightsitem wt-dashboardbox wt-insightnoticon">
										<figure class="wt-userlistingimg">
											<img src="{{asset('assets/images/thumbnail/img-19.png')}}" alt="image description" class="mCS_img_loaded">
										</figure>
										<div class="wt-insightdetails">
											<div class="wt-title">
												<h3>New Messages</h3>
												<a href="javascript:void(0)">Click To View</a>
											</div>	
										</div>	
									</div>																		
								</div>
								<!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-insightsitem wt-dashboardbox">
										<ul class="wt-countersoon" data-date="May 14 2019 20:20:22">
											<li><i class="fa fa-spinner fa-spin"></i></li>
								    		<li>
									    		<div class="wt-countdowncontent">
									    			<p>d</p> <span class="days" data-days></span>
								    			</div>
							    			</li>
								    		<li>
								    			<div class="wt-countdowncontent">
								    				<p>h</p> <span class="hours" data-hours></span>
							    				</div>
						    				</li>
								    		<li>
								    			<div class="wt-countdowncontent">
								    				<p>m</p> <span class="minutes" data-minutes></span>
							    				</div>
						    				</li>
								    		<li>
								    			<div class="wt-countdowncontent">
								    				<p>s</p> <span class="seconds" data-seconds></span>
							    				</div>
						    				</li>
								    	</ul> 
										<figure class="wt-userlistingimg">
											<img src="{{asset('assets/images/thumbnail/img-21.png')}}" alt="image description" class="mCS_img_loaded">
										</figure>
										<div class="wt-insightdetails">
											<div class="wt-title">
												<h3>Check Package Expiry</h3>
												<a href="javascript:void(0)">Click To View</a>
											</div>
										</div>	
									</div>
								</div> -->
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-insightsitem wt-dashboardbox">
										<figure class="wt-userlistingimg">
											<img src="{{asset('assets/images/thumbnail/img-20.png')}}" alt="image description" class="mCS_img_loaded">
										</figure>
										<div class="wt-insightdetails">
											<div class="wt-title">
												<h3>Latest Proposals</h3>
												<a href="javascript:void(0)">Click To View</a>
											</div>
										</div>	
									</div>						
								</div>
								<div class="col-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-insightsitem wt-dashboardbox">
										<figure class="wt-userlistingimg">
											<img src="{{asset('assets/images/thumbnail/img-22.png')}}" alt="image description" class="mCS_img_loaded">
										</figure>
										<div class="wt-insightdetails">
											<div class="wt-title">
												<h3>View Saved Items</h3>
												<a href="javascript:void(0)">Click To View</a>
											</div>													
										</div>
									</div>								
								</div>
							</div>
							<div class="wt-insightsongoing">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 float-left">
									<div class="wt-dashboardbox wt-ongoingproject">
										<div class="wt-dashboardboxtitle">
											<h2>Ongoing Projects</h2>
										</div>
										<div class="wt-dashboardboxcontent wt-hiredfreelance">
											<div class="wt-userlistinghold wt-featured">
												<!-- <span class="wt-smallfeaturedtag"><img src="{{asset('assets/images/featured.png')}}" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span> -->
												<div class="wt-proposaldetails">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h3>I want some customization &amp; installation on wordpress <span>Louanne Mattioli</span></h3>
															<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
														</div>
													</div>													
												</div>	
											</div>
											<div class="wt-userlistinghold wt-featured">
												<!-- <span class="wt-smallfeaturedtag"><img src="images/featured.png" alt="img description" data-tipso="Plus Member" class="template-content tipso_style mCS_img_loaded"></span> -->
												<div class="wt-proposaldetails">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h3>Develop a transportation company website <span>Louanne Mattioli</span></h3>
															<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
														</div>
													</div>													
												</div>	
											</div>											
											<div class="wt-userlistinghold wt-featured">
												<div class="wt-proposaldetails">
													<div class="wt-contenthead">
														<div class="wt-title">
															<h3>Change temp to Arabic &amp; install on wordpress <span>Louanne Mattioli</span></h3>
															<a href="javascript:void(0)" class="wt-hiredarrow"><i class="lnr lnr-chevron-right"></i></a>
														</div>
													</div>													
												</div>	
											</div>							
										</div>
									</div>
								</div>
							</div>	
							<div class="wt-dashboardsaveholder wt-dashboardsave row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-proposalsr wt-dashboardbox">
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
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 float-left">
									<div class="wt-proposalsr wt-dashboardbox">
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
								</div>	
							</div>							
						</div>						
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
<script src="{{ URL::asset('assets/js/croppie.js') }}"></script>
<script src="{{ URL::asset('assets/js/chart.js') }}"></script>
<script>
	var ctx = document.getElementById("wt-jobchart");
	var wt_jobchart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["January", "February", "March", "April"],
	        datasets: [{
	            label: 'Total Earnings',
	            data: [ 6, 8, 4, 7, 10],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(54, 162, 235, 0.2)',
	                'rgba(255, 206, 86, 0.2)',
	                'rgba(75, 192, 192, 0.2)',
	                'rgba(153, 102, 255, 0.2)',
	                'rgba(255, 159, 64, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255,99,132,1)',
	                'rgba(54, 162, 235, 1)',
	                'rgba(255, 206, 86, 1)',
	                'rgba(75, 192, 192, 1)',
	                'rgba(153, 102, 255, 1)',
	                'rgba(255, 159, 64, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true,
	                    fontSize:12,
	                    fontColor:'#767676'
	                }
	            }]
	        },
	        legend: {
	            labels: {
	                fontSize:14,
	                fontColor: '#767676',
	                FontFamily:'Open Sans',
	                
	            }
	        }
	    }
	});
</script>
@endsection