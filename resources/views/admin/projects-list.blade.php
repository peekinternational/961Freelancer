@extends('admin.layouts.master')
@section('title') Projects List @endsection
@section('content')
@component('admin.common-components.breadcrumb')
@slot('title') Projects List @endslot
@slot('li_1') Projects @endslot
@slot('li_2') Projects List @endslot
@endcomponent

<div class="row">
  <div class="col-lg-12">
    <div class="">
      <div class="table-responsive">
        <table id="project-list-table" class="table project-list-table table-nowrap table-centered table-borderless">
          <thead>
            <tr>
              <th scope="col" style="width: 100px">#</th>
              <th scope="col">Projects</th>
              <th scope="col">Project Length</th>
              <th scope="col">Type</th>
              <th scope="col">Budget</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($projects as $project)
            <tr>
              <td><img src="{{asset('assets/images/user/profile/'.$project->clientInfo->profile_image)}}" alt="" class="avatar-sm"></td>
              <td>
                <h5 class="text-truncate font-size-14"><a href="#" class="text-dark">{{$project->job_title}}</a></h5>
                <p class="text-muted mb-0">It will be as simple as Occidental</p>
              </td>
              <td>{{$project->job_duration}}</td>
              <td class="text-capitalize">{{$project->job_type}}</td>
              <td> 
                @if($project->job_type == 'fixed')
                  ${{$project->fixed_price}} /Fixed
                @else
                  ${{$project->hourly_min_price}} - ${{$project->hourly_max_price}} /hr
                @endif
              </td>
              <td><span class="badge badge-primary">Completed</span></td>
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