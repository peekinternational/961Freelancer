@foreach($jobs as $job)
<!-- Job Listing -->
<a href="{{ route('job.show',$job->job_id)}}" class="job-listing">

	<!-- Job Listing Details -->
	<div class="job-listing-details">
		<!-- Logo -->
		<!-- <div class="job-listing-company-logo">
			<img src="images/company-logo-01.png" alt="">
		</div> -->

		<!-- Details -->
		<div class="job-listing-description">
			<!-- <h4 class="job-listing-company">Hexagon 
				<span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span>
			</h4> -->
			<h3 class="job-listing-title">{{$job->job_title}}</h3>
			<p class="job-listing-text">{{ \Illuminate\Support\Str::limit($job->job_description, 200, $end='...') }}</p>
		</div>

		<!-- Bookmark -->
		@if($job->saveJobs != '')
			@foreach($job->saveJobs as $save)
				@if($save->user_id == Auth::user()->id && $save->status == 1)
					<span class="bookmark-icon" style="color: red;" onclick="saveJob({{$job->id}})"></span>
				@endif
				@if($save->user_id == Auth::user()->id && $save->status == 0)
					<span class="bookmark-icon" onclick="saveJob({{$job->id}})"></span>
				@endif
			@endforeach
		@endif
		@if($job->saveJobs == '')
			<span class="bookmark-icon" onclick="saveJob({{$job->id}})"></span>
		@endif
	</div>

	<!-- Job Listing Footer -->
	<div class="job-listing-footer">
		<ul>
			<li><i class="fal fa-map-marker-alt"></i> {{$job->job_location}}</li>
			<li class="text-capitalize"><i class="fal fa-briefcase"></i> {{$job->job_type}}</li>
			@if($job->job_type == 'fixed')
			<li><i class="fal fa-wallet"></i> ${{$job->fixed_price}} Fixed-price</li>
			@else
			<li><i class="fal fa-wallet"></i>${{$job->hourly_min_price}}-${{$job->hourly_max_price}} Hourly</li>
			@endif
			<li><i class="fal fa-clock"></i> {{$job->job_duration}}</li>
			<li><i class="fal fa-ribbon"></i> {{$job->service_level}}</li>
			<li><i class="fal fa-ribbon"></i> {{$job->job_cat}}</li>
		</ul>
	</div>
</a>		
@endforeach