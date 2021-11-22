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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-9">
						<div class="wt-dashboardbox">
							<div class="wt-dashboardboxtitle">
								<h2>Job Details</h2>
							</div>
							<div class="wt-dashboardboxcontent wt-jobdetailsholder">
								<div class="wt-freelancerholder wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Hired Freelancer</h2>
									</div>
									<div class="wt-jobdetailscontent">
										
										<div class="wt-userlistinghold wt-featured wt-userlistingvtwo">
											<div class="wt-userlistingcontent">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"><i class="fa fa-check-circle"></i> {{App\Models\Job::client($ongoingJob->job->user_id)->first_name}} {{App\Models\Job::client($ongoingJob->job->user_id)->last_name}}
														</a>
														<h2>{{$ongoingJob->job->job_title}}</h2>
													</div>
													<ul class="wt-userlisting-breadcrumb">
														@if($ongoingJob->job->job_type == 'fixed')
														<li><span><i class="far fa-money-bill-alt"></i> ${{$ongoingJob->job->fixed_price}}.00</span></li>
														@else
														<li><span><i class="far fa-money-bill-alt"></i> ${{$ongoingJob->job->hourly_min_price}}.00-{{$ongoingJob->job->hourly_max_price}}.00 / hr</span></li>
														@endif
														<li><span class="wt-dashboradclock"><i class="fal fa-map-marker-alt"></i>  {{$ongoingJob->job->job_location}}</span></li>
														<li><a href="javascript:void(0);" class="wt-clicksave"><i class="fa fa-heart"></i> Save</a></li>
													</ul>
												</div>
												<div class="wt-rightarea">
													<div class="wt-hireduserstatus">
														<h4>Hired</h4>
														<span>
															{{App\Models\Proposal::freelancer($ongoingJob->user_id)->first_name}} 
															{{App\Models\Proposal::freelancer($ongoingJob->user_id)->last_name}}
														</span>
														<ul class="wt-hireduserimgs">
															<li><figure><img src="{{asset('assets/images/user/profile/'.App\Models\Proposal::freelancer($ongoingJob->user_id)->profile_image)}}" alt="img description"></figure></li>
														</ul>
													</div>
												</div>
											</div>	
										</div>
										
									</div>
								</div>
								
								<div class="wt-rcvproposalholder wt-hiredfreelancer wt-tabsinfo">
									<div class="wt-tabscontenttitle">
										<h2>Hired Freelancer</h2>
									</div>
									<div class="wt-jobdetailscontent">
										<div class="wt-userlistinghold wt-featured wt-proposalitem">
											<figure class="wt-userlistingimg">
												<img src="{{asset('assets/images/user/profile/'.App\Models\Proposal::freelancer($ongoingJob->user_id)->profile_image)}}" alt="image description" class="mCS_img_loaded">
											</figure>
											<div class="wt-proposaldetails">
												<div class="wt-contenthead">
													<div class="wt-title">
														<a href="usersingle.html"> 
															{{App\Models\Proposal::freelancer($ongoingJob->user_id)->first_name}} 
															{{App\Models\Proposal::freelancer($ongoingJob->user_id)->last_name}}
														</a>
													</div>
												</div>
												<div class="wt-proposalfeedback">
													<span class="wt-starsvtwo">
														<i class="fa fa-star fill"></i>
													</span>
													<span class="wt-starcontent"> {{$rating_avg}}/<i>5</i> <em> ({{$rating_count}} Feedback)</em></span>
												</div>													
											</div>
											<div class="wt-rightarea wt-titlewithsearch">
												<form class="wt-formtheme wt-formsearch" id="status_form">
													<fieldset>
														@if(Auth::user()->account_type == 'Client')
														<input type="hidden" name="proposal_id" value="{{$ongoingJob->id}}">
														<input type="hidden" name="job_id" value="{{$ongoingJob->job_id}}">
														<div class="form-group">
															<span class="wt-select">
																<select name="project_status" onchange="projectStatus(this)">
																	<option value="" disabled="">Project Status</option>
																	<option value="2" {{$ongoingJob->job->job_status == 2 ? 'selected="selected"' : ''}}>In progress</option>
																	<option value="3"{{$ongoingJob->job->job_status == 3 ? 'selected="selected"' : ''}}>Cancel</option>
																	<option value="4"{{$ongoingJob->job->job_status == 5 ? 'selected="selected"' : ''}}>Complete</option>
																</select>
															</span>
															<a href="{{url('rating/'.$ongoingJob->job->job_id)}}" class="wt-searchgbtn"><i class="fa fa-check"></i></a>
														</div>
														@endif
														@if(Auth::user()->account_type == 'Freelancer')
															@if($ongoingJob->job->job_status == 2)
															<a href="javascrip:void(0);" class="btn wt-btn">In Progress</a>
															@endif
															@if($ongoingJob->job->job_status == 3)
															<a href="javascrip:void(0);" class="btn wt-btn">Cancelled</a>
															@endif
															@if($ongoingJob->job->job_status == 5)
															<a href="javascrip:void(0);" class="btn wt-btn">Completed</a>
															@endif
														@endif
													</fieldset>
												</form>
												@if(Auth::user()->account_type == 'Client')
												<div class="wt-hireduserstatus px-2" style="min-width: 95px;">
													<form id="createChat{{$ongoingJob->id}}" class="d-inline">
														@csrf
														<input type="hidden" id="jobId{{$ongoingJob->id}}" name="job_id" value="{{$ongoingJob->job->job_id}}">
														<input type="hidden"id="ongoingId{{$ongoingJob->id}}" name="proposal_id" value="{{$ongoingJob->id}}">
														<input type="hidden"id="receiverId{{$ongoingJob->id}}" name="receiver_id" value="{{$ongoingJob->user_id}}">
														<button type="button" name="chat" onclick="createChat({{$ongoingJob->id}})" class="wt-btn chat-btn px-3"><i class="fal fa-comments text-reset"></i></button>
													</form>
												</div>
												@endif
												<div class="wt-hireduserstatus">
													<h5>&#36;{{$ongoingJob->budget}}</h5>
													<span>In 0{{$ongoingJob->duration}} Months</span>
												</div>
												<div class="wt-hireduserstatus" data-bs-toggle="modal" data-bs-target="#coverModal{{$ongoingJob->id}}">
													<i class="far fa-envelope"></i>
													<span>Cover Letter</span>
												</div>
												<!-- Modal -->
												<div class="modal fade" id="coverModal{{$ongoingJob->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog">
												    <div class="modal-content">
												      <div class="modal-header">
												        <h5 class="modal-title text-center" id="exampleModalLabel">Cover Letter</h5>
												        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												      </div>
												      <div class="modal-body">
												        <p>{{$ongoingJob->cover_letter}}</p>
												      </div>
												      <div class="modal-footer">
												        <button type="button" class="btn wt-btn" data-bs-dismiss="modal">Close</button>
												      </div>
												    </div>
												  </div>
												</div>														
												<div class="wt-hireduserstatus" data-bs-toggle="modal" data-bs-target="#attachModal{{$ongoingJob->id}}">
													<i class="fa fa-paperclip"></i>
													<span>Attachments</span>
												</div>
												<!-- Modal -->
												<div class="modal fade" id="attachModal{{$ongoingJob->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												  <div class="modal-dialog">
												    <div class="modal-content">
												      <div class="modal-header">
												        <h5 class="modal-title text-center" id="exampleModalLabel">Attached Files</h5>
												        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												      </div>
												      <div class="modal-body">
												        <ul class="wt-attachfile">
												        	@if ($ongoingJob->attachments != "")
												        		@foreach(explode(',',$ongoingJob->attachments) as $attach)
												        		<li>
												        			<span>{{$attach}}</span>
												        			<em><a href="{{asset('assets/images/proposal/'.$attach)}}" download><i class="fal fa-download"></i></a></em>
												        		</li>
												        		@endforeach
												        	@endif
												        </ul>
												      </div>
												      <div class="modal-footer">
												        <button type="button" class="btn wt-btn" data-bs-dismiss="modal">Close</button>
												      </div>
												    </div>
												  </div>
												</div>
												<!-- End Modal -->														
											</div>
										</div>
									</div>
								</div>
								
								<!-- <div class="wt-projecthistory">
									<div class="wt-tabscontenttitle">
										<h2>Project History</h2>
									</div>
									<div class="wt-historycontent">
										<ul id="accordion" class="wt-historycontentcol">
											<li class="wt-historycolhead">
												<h3><span>Date</span><span>Message</span><span>Attachment</span></h3>
											</li>
											<li class="collapsed" data-toggle="collapse" data-target="#collapseone">
												<div class="wt-dateandmsg">
													<span><img src="images/user/ongoing/img-01.jpg" alt="img description">Jun 27, 2019</span>
													<span>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim sed</span>
												</div>
												<div class="wt-rightarea wt-msgbtns">
													<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
													<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
												</div>
											</li>
											<li class="wt-historydescription collapse active fade show" id="collapseone" data-parent="#accordion">
												<div class="wt-description">
													<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
												</div>
											</li>
											<li class="collapsed" data-toggle="collapse" data-target="#collapsetwo">
												<div class="wt-dateandmsg">
													<span><img src="images/user/ongoing/img-02.jpg" alt="img description">Jun 27, 2019</span>
													<span>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore  eiusmod tempor incididunt ut labore eta dolore magnam aliqua.</span>
												</div>
												<div class="wt-rightarea wt-msgbtns">
													<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
													<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
												</div>
											</li>
											<li class="wt-historydescription collapse" id="collapsetwo" data-parent="#accordion">
												<div class="wt-description">
													<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
												</div>
											</li>
											<li class="collapsed" data-toggle="collapse" data-target="#collapsethree">
												<div class="wt-dateandmsg">
													<span><img src="images/user/ongoing/img-01.jpg" alt="img description">Jun 27, 2019</span>
													<span>Veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat aut irure dolo</span>
												</div>
												<div class="wt-rightarea wt-msgbtns">
													<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
													<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
												</div>
											</li>
											<li class="wt-historydescription collapse" id="collapsethree" data-parent="#accordion">
												<div class="wt-description">
													<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
												</div>
											</li>
											<li class="collapsed" data-toggle="collapse" data-target="#collapsefour">
												<div class="wt-dateandmsg">
													<span><img src="images/user/ongoing/img-02.jpg" alt="img description">Jun 27, 2019</span>
													<span>Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur sint occaecat cupidat nonproid</span>
												</div>
												<div class="wt-rightarea wt-msgbtns">
													<a href="javascript:void(0);" class="wt-btn wt-msgbtn"><i class="lnr lnr-chevron-up"></i>Message</a>
													<a href="javascript:void(0);" class="wt-btn wt-attachmentbtn"><i class="lnr lnr-download"></i>Attachment</a>
												</div>
											</li>
											<li class="wt-historydescription collapse" id="collapsefour" data-parent="#accordion">
												<div class="wt-description">
													<p>Adipisicing elit sed do eiusmod tempor incididunt ut labore eta dolore magnam aliqua. Ut enim ad minim veniam, qu nostrud exercitation ullamco laboris nisi ut aliquiprex ea commodo consequat eta dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumau dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident, sunt in culpa quiste officia deserunt mollit anim id est laborum. Sed uten perspiciatis unde omnis istetam natus error sit voluptatem accusantium doloremque laudantium.</p>
												</div>
											</li>
										</ul>
										<form class="wt-formtheme wt-userform">
											<fieldset>
												<div class="form-group">
													<textarea id="wt-tinymceeditor" class="wt-tinymceeditor" placeholder="Add Job Detail Here"></textarea>
												</div>
												<div class="form-group form-group-label">
													<div class="wt-labelgroup">
														<label for="file">
															<span class="wt-btn">Select Files</span>
															<input type="file" name="file" id="file">
														</label>
														<span>Drop files here to upload</span>
														<em class="wt-fileuploading">Uploading<i class="fa fa-spinner fa-spin"></i></em>
													</div>
												</div>
												<div class="form-group">
													<ul class="wt-attachfile">
														<li class="wt-uploading">
															<span class="uploadprogressbar"></span>
															<span>Category Icon.jpg</span>
															<em>File size: 450 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
														<li>
															<span class="uploadprogressbar"></span>
															<span>requirments.pdf</span>
															<em>File size: 300 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
														<li>
															<span class="uploadprogressbar"></span>
															<span>company Intro.docx</span>
															<em>File size: 100 kb<a href="javascript:void(0);" class="lnr lnr-cross"></a></em>
														</li>
													</ul>
												</div>
												<div class="form-group wt-btnarea">
													<a href="javascript:void(0);" class="wt-btn">Send Now</a>
												</div>
											</fieldset>
										</form>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
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
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});


	function hireNow(id,job_id){
		$.ajax({
	    url: "{{route('hire-freelancer')}}",
	    type: 'POST',
	    data: {"proposal_id": id,"job_id": job_id},

	    success: (response)=>{
	        if (response.status == 'true') {
	            $.notify(response.message , 'success'  );
	              window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/proposals/";
	            
	            
	        }else{
	            $.notify(response.message , 'error');

	        }
	    },
	    error: (errorResponse)=>{
	        $.notify( errorResponse, 'error'  );


	    }
		})
	}


	function createChat(id){
		let createFormData = $('#createChat'+id).serialize();

		$.ajax({
	    url: "{{url('add-friend')}}",
	    type: 'POST',
	    data: createFormData,

	    success: (response)=>{
	        if (response.status == 'true') {
	            $.notify(response.message , 'success'  );
	              window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/messages?conversation="+response.conversation_id;
	            
	            
	        }else{
	            $.notify(response.message , 'error');

	        }
	    },
	    error: (errorResponse)=>{
	      $.notify( errorResponse, 'error'  );
	    }
		})
	}

	function projectStatus(status){
		let createFormData = $('#status_form').serialize();

		$.ajax({
	    url: "{{url('update-project-status')}}",
	    type: 'POST',
	    data: createFormData,

	    success: (response)=>{
	        if (response.status == 'true') {
	            $.notify(response.message , 'success'  );
	            if(response.job_status == 3){
	              window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/cancelled-job/";
	            }
	            if(response.job_status == 5){
	            	window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/completed-jobs/";
	            }
	            
	            
	        }else{
	            $.notify(response.message , 'error');

	        }
	    },
	    error: (errorResponse)=>{
	      $.notify( errorResponse, 'error'  );
	    }
		})
	}

</script>
@endsection