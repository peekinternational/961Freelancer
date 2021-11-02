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
				<div class="wt-title"><h2>Privacy Policy</h2></div>
				<ol class="wt-breadcrumb">
					<li><a href="{{route('home')}}">Home</a></li>
					<li class="wt-active">Privacy Policy</li>
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<h2>Privacy Policy</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- User Listing End-->
	</div>
</main>
<!--Main End-->
@endsection