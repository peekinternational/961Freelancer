@extends('frontend.layouts.app')
@section('style')
<link rel="stylesheet" media="screen" href="{{ asset('assets/css/jquery-ui.css') }}">
@endsection
@section('content')
<!--Inner Home Banner Start-->
<!-- <div class="wt-haslayout wt-innerbannerholder">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
				<div class="wt-innerbannercontent">
				<div class="wt-title"><h2>Search Result</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="index-2.html">Home</a></li>
					<li class="wt-active">Job</li>
				</ol>
				</div>
			</div>
		</div>
	</div>
</div> -->
<!--Inner Home End-->
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout wt-innerbgcolor">
	<div class="wt-haslayout wt-main-section">
		<!-- User Listing Start-->
		<div class="wt-haslayout">
			<div class="container">
				<div id="wt-twocolumns" class="row wt-twocolumns wt-haslayout">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-4 float-left">
						<aside id="wt-sidebar" class="wt-sidebar">
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Categories</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="form-group">
												<input type="text" name="Search" class="form-control" placeholder="Search Category">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset>
										<fieldset>
											<div class="wt-checkboxholder wt-verticalscrollbar">
												<span class="wt-checkbox">
													<input id="wordpress" type="checkbox" name="description" value="company" checked>
													<label for="wordpress"> WordPress</label>
												</span>
												<span class="wt-checkbox">
													<input id="graphic" type="checkbox" name="description" value="company">
													<label for="graphic"> Graphic Design</label>
												</span>
												<span class="wt-checkbox">
													<input id="website" type="checkbox" name="description" value="company">
													<label for="website"> Website Design</label>
												</span>
												<span class="wt-checkbox">
													<input id="article" type="checkbox" name="description" value="company">
													<label for="article"> Article Writing</label>
												</span>
												<span class="wt-checkbox">
													<input id="software" type="checkbox" name="description" value="company">
													<label for="software"> Software Architecture</label>
												</span>
												<span class="wt-checkbox">
													<input id="wordpress1" type="checkbox" name="description" value="company">
													<label for="wordpress1"> WordPress</label>
												</span>
												<span class="wt-checkbox">
													<input id="graphic1" type="checkbox" name="description" value="company">
													<label for="graphic1"> Graphic Design</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Project Type</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="wt-checkboxholder">
												<span class="wt-radio">
													<input id="project" type="radio" name="description" value="company" checked>
													<label for="project"> Any Project Type</label>
												</span>
												<span class="wt-radio">
													<input id="hourly" type="radio" name="description" value="company">
													<label for="hourly"> Hourly Based Project</label>
												</span>
												<div id="wt-productrangeslider" class="wt-productrangeslider wt-themerangeslider"></div>
												<div class="wt-amountbox">
													<input type="text" id="wt-consultationfeeamount" readonly>
												</div>
												<span class="wt-radio">
													<input id="fixed" type="radio" name="description" value="company">
													<label for="fixed"> Fixed Price Project</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Location</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="form-group">
												<input type="text" name="fullname" class="form-control" placeholder="Search Location">
												<a href="javascrip:void(0);" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></a>
											</div>
										</fieldset>
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
							</div>
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Skills Required</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="wt-checkboxholder">
												<span class="wt-checkbox">
													<input id="proindependent" type="checkbox" name="description" value="company" checked>
													<label for="proindependent">Pro Independent Freelancers</label>
												</span>
												<span class="wt-checkbox">
													<input id="proagency" type="checkbox" name="description" value="company">
													<label for="proagency"> Pro Agency Freelancers</label>
												</span>
												<span class="wt-checkbox">
													<input id="independent" type="checkbox" name="description" value="company">
													<label for="independent"> Independent Freelancers</label>
												</span>
												<span class="wt-checkbox">
													<input id="agency" type="checkbox" name="description" value="company">
													<label for="agency">Agency Freelancers</label>
												</span>
												<span class="wt-checkbox">
													<input id="rising" type="checkbox" name="description" value="company">
													<label for="rising"> New Rising Talent</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgettitle">
									<h2>Project Length</h2>
								</div>
								<div class="wt-widgetcontent">
									<form class="wt-formtheme wt-formsearch">
										<fieldset>
											<div class="wt-checkboxholder">
												<span class="wt-checkbox">
													<input id="anyproject" type="checkbox" name="anyproject" value="project" checked>
													<label for="anyproject">Any Project Length</label>
												</span>
												<span class="wt-checkbox">
													<input id="01month" type="checkbox" name="01month" value="month">
													<label for="01month"> Less Than 01 Month</label>
												</span>
												<span class="wt-checkbox">
													<input id="3months" type="checkbox" name="3months" value="months">
													<label for="3months"> 01 to 03 Months</label>
												</span>
												<span class="wt-checkbox">
													<input id="6months" type="checkbox" name="months" value="months">
													<label for="6months"> 03 to 06 Months</label>
												</span>
												<span class="wt-checkbox">
													<input id="moremonths" type="checkbox" name="months" value="months">
													<label for="moremonths"> More Than 06 Months</label>
												</span>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
							<div class="wt-widget wt-effectiveholder">
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
							</div>
							<div class="wt-widget wt-effectiveholder">
								<div class="wt-widgetcontent">
									<div class="wt-applyfilters">
										<span>Click “Apply Filter” to apply latest<br> changes made by you.</span>
										<a href="javascript:void(0);" class="wt-btn">Apply Filters</a>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col-xl-8 float-left">
						
						<div class="notify-box d-flex justify-content-between align-items-center">
							<div class="switch-container">
								<span>01 - 48 of 57143 results for <em>"PHP Developer"</em></span>
							</div>

							<div class="sort-by align-items-center">
								<span>Sort by:</span>
								<div class="btn-group bootstrap-select hide-tick dropup">
									<!-- <button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" title="Random" aria-expanded="false">
										<span class="filter-option pull-left">Random</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
									</button> -->
									<div class="dropdown-menu open" role="combobox" style="max-height: 216px; overflow: hidden; min-height: 121px;">
										<ul class="dropdown-menu inner" role="listbox" aria-expanded="false" style="max-height: 196px; overflow-y: auto; min-height: 101px;">
											<li data-original-index="0">
												<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
													<span class="text">Relevance</span>
													<span class="glyphicon glyphicon-ok check-mark"></span>
												</a>
											</li>
											<li data-original-index="1">
												<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
													<span class="text">Newest</span>
													<span class="glyphicon glyphicon-ok check-mark"></span>
												</a>
											</li>
											<li data-original-index="2">
												<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false">
													<span class="text">Oldest</span>
													<span class="glyphicon glyphicon-ok check-mark"></span>
												</a>
											</li>
											<li data-original-index="3" class="selected">
												<a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true">
													<span class="text">Random</span>
													<span class="glyphicon glyphicon-ok check-mark"></span>
												</a>
											</li>
										</ul>
									</div>
									<select class="selectpicker hide-tick" tabindex="-98">
										<option>Relevance</option>
										<option>Newest</option>
										<option>Oldest</option>
										<option>Random</option>
									</select>
								</div>
							</div>
						</div>
						<div class="listings-container mt-5">
							
							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-01.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Hexagon <span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span></h4>
										<h3 class="job-listing-title">Bilingual Event Support Specialist</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>		

							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-02.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Coffee</h4>
										<h3 class="job-listing-title">Barista and Cashier</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>
							

							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-03.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">King <span class="verified-badge" data-tippy-placement="top" data-tippy="" data-original-title="Verified Employer"></span></h4>
										<h3 class="job-listing-title">Restaurant General Manager</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>

							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-04.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Mates</h4>
										<h3 class="job-listing-title">Administrative Assistant</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>
							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-04.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Mates</h4>
										<h3 class="job-listing-title">Administrative Assistant</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>
							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-04.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Mates</h4>
										<h3 class="job-listing-title">Administrative Assistant</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>
							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-04.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Mates</h4>
										<h3 class="job-listing-title">Administrative Assistant</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>
							<!-- Job Listing -->
							<a href="single-job-page.html" class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">
									<!-- Logo -->
									<div class="job-listing-company-logo">
										<img src="images/company-logo-04.png" alt="">
									</div>

									<!-- Details -->
									<div class="job-listing-description">
										<h4 class="job-listing-company">Mates</h4>
										<h3 class="job-listing-title">Administrative Assistant</h3>
										<p class="job-listing-text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value.</p>
									</div>

									<!-- Bookmark -->
									<span class="bookmark-icon"></span>
								</div>

								<!-- Job Listing Footer -->
								<div class="job-listing-footer">
									<ul>
										<li><i class="fal fa-map-marker-alt"></i> San Francissco</li>
										<li><i class="fal fa-briefcase"></i> Full Time</li>
										<li><i class="fal fa-wallet"></i> $35000-$38000</li>
										<li><i class="fal fa-clock"></i> 2 days ago</li>
									</ul>
								</div>
							</a>


							<!-- Pagination -->
							<div class="clearfix"></div>
							<div class="row">
								<div class="col-md-12">
									<!-- Pagination -->
									<div class="pagination-container mt-3 mb-5">
										<nav class="pagination justify-content-center">
											<ul>
												<li class="pagination-arrow"><a href="#"><i class="fal fa-chevron-left"></i></a></li>
												<li><a href="#">1</a></li>
												<li><a href="#" class="current-page">2</a></li>
												<li><a href="#">3</a></li>
												<li><a href="#">4</a></li>
												<li class="pagination-arrow"><a href="#"><i class="fal fa-chevron-right"></i></a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- Pagination / End -->
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
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
@endsection