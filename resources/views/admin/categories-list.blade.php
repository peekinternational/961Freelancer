@extends('admin.layouts.master')
@section('title') Categories List @endsection
@section('content')
@component('admin.common-components.breadcrumb')
@slot('title') Categories List @endslot
@slot('li_1') Categories @endslot
@slot('li_2') Categories List @endslot
@endcomponent

<div class="row">
  <div class="col-lg-12">
    <div class="">
      <div class="table-responsive">
        <table id="project-list-table" class="table project-list-table table-nowrap table-centered table-borderless">
          <thead>
            <tr>
              <th scope="col" style="width: 100px">#</th>
              <th scope="col">Category</th>
              <th scope="col">Category Icon</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>
                <h5 class="text-truncate font-size-14">
                  <a href="#" class="text-dark">{{$category->category_name}}</a>
                </h5>
              </td>
              <td><img src="{{asset('assets/images/categories/'.$category->cat_icon)}}" alt="" class="avatar-sm"></td>
              <td>
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">Edit</a>
                    <a class="dropdown-item" href="#">Delete</a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('script-bottom')
<script>
    $(document).ready(function() {
        $('#project-list-table').DataTable();
    } );
    
</script>
@endsection