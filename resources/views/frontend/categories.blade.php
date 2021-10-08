@extends('frontend.layouts.app')
@section('content')
<!--Main Start-->
<main id="wt-main" class="wt-main wt-haslayout mt-5">
  <!--Categories Start-->
  <section class="wt-haslayout wt-main-section">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-xs-12 col-sm-12 col-md-8 push-md-2 col-lg-6 push-lg-3">
          <div class="wt-sectionhead wt-textcenter">
            <div class="wt-sectiontitle">
              <h2>Explore Categories</h2>
              <span>Professional by categories</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach($categories as $category)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
          <div class="wt-categorycontent">
            <figure><img src="{{asset('assets/images/categories/'.$category->cat_icon)}}" alt="image description"></figure>
            <div class="wt-cattitle">
              <h3><a href="javascrip:void(0);">{{$category->category_name}}</a></h3>
            </div>
            <div class="wt-categoryslidup">
              <p>{{ \Illuminate\Support\Str::limit($category->cat_desc, $limit = 80, $end = '...') }}</p>
              <a href="javascript:void(0);">Explore <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
        
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4 text-center">
          <div class="wt-btnarea">
            <a href="javascript:void(0)" class="wt-btn">View All</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Categories End-->

</main>
<!--Main End-->
@endsection