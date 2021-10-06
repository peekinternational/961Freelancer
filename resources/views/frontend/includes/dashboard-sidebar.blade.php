<div id="wt-sidebarwrapper" class="wt-sidebarwrapper">
				<div id="wt-btnmenutoggle" class="wt-btnmenutoggle">
					<span class="menu-icon">
						<em></em>
						<em></em>
						<em></em>
					</span>
				</div>
				<div id="wt-verticalscrollbar" class="wt-verticalscrollbar">
					<div class="wt-companysdetails wt-usersidebar">
						<figure class="wt-companysimg">
							@if(Auth::user()->cover_image != '')
							<img src="{{asset('assets/images/user/cover/'.Auth::user()->cover_image)}}" alt="img description">
							@else
							<img src="{{asset('assets/images/sidebar/img-01.jpg')}}" alt="img description">
							@endif
						</figure>
						<div class="wt-companysinfo">
							<figure>
							@if(Auth::user()->profile_image != '')
								<img src="{{asset('assets/images/user/profile/'.Auth::user()->profile_image)}}" alt="img description">
							@else
								<img src="{{asset('assets/images/user-login.png')}}" alt="img description">
							@endif
							</figure>
							<div class="wt-title">
								<h2><a href="javascript:void(0);"> {{Auth::user()->username}}</a></h2>
								<span>{{Auth::user()->tagline}}</span>
							</div>
							@if(Auth::user()->account_type == 'Client')
							<div class="wt-btnarea"><a href="{{ route('job.create')}}" class="wt-btn">Post a Job</a></div>
							@endif
						</div>
					</div>
					<nav id="wt-navdashboard" class="wt-navdashboard">
						<ul>
							<li class="wt-active">
								<a href="{{url('profile')}}">
									<i class="fal fa-briefcase"></i>
									<span>My Profile</span>
								</a>
							</li>
							<li class="menu-item-has-children">
								<a href="javascript:void(0);">
									<i class="fal fa-cube"></i>
									<span>All Jobs</span>
								</a>
								<ul class="sub-menu">
									<li><hr><a href="">Completed Jobs</a></li>
									<li><hr><a href="">Cancelled Jobs</a></li>
									<li><hr><a href="">Ongoing Jobs</a></li>
									<li><hr><a href="">Ongoing Single</a></li>
								</ul>
							</li>
							@if(Auth::user()->account_type == 'Client')
							<li>
								<a href="{{route('job.manage-jobs')}}">
									<i class="fal fa-megaphone"></i>
									<span>Manage Jobs</span>
								</a>
							</li>
							@endif
							<li class="wt-notificationicon">
								<a href="javascript:void(0);">
									<i class="fal fa-edit"></i>
									<span>Messages</span>
								</a>
							</li>
							<li>
								<a href="{{ route('freelancers.saved-items') }}">
									<i class="fal fa-heart"></i>
									<span>My Saved Items</span>
								</a>
							</li>
							<!-- <li>
								<a href="">
									<i class="fal fa-file"></i>
									<span>Invoices</span>
								</a>
							</li> -->
							<!-- <li>
								<a href="">
									<i class="fal fa-clone"></i>
									<span>Category</span>
								</a>
							</li> -->
							<!-- <li>
								<a href="">
									<i class="fal fa-dollar-sign"></i>
									<span>Packages</span>
								</a>
							</li> -->
							<li>
								<a href="">
									<i class="fal fa-save"></i>
									<span>Proposals</span>
								</a>
							</li>
							<li>
								<a href="{{route('account-setting')}}">
									<i class="fal fa-anchor"></i>
									<span>Account Settings</span>
								</a>
							</li>
							<!-- <li>
								<a href="">
									<i class="fal fa-tag"></i>
									<span>Help &amp; Support</span>
								</a>
							</li> -->
							<li>
								<a href="{{route('logout')}}">
									<i class="fal fa-arrow-to-right"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</nav>
					<div class="wt-navdashboard-footer">
						<span>961Freelancer. © 2021 All Rights Reserved.</span>
					</div>
				</div>
			</div>