@extends('admin.layouts.master')

@section('title') Clients List @endsection

@section('content')

    @component('admin.common-components.breadcrumb')
         @slot('title') Clients List  @endslot
         @slot('li_1') Users @endslot
         @slot('li_2') Clients List @endslot
     @endcomponent


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">
          <table id="user-lists" class="table table-centered table-nowrap table-hover">
            <thead class="thead-light">
              <tr>
                  <th scope="col" style="width: 70px;">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Country</th>
                  <th scope="col">Account Type</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($clients as $client)
              <tr>
                <td>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle">
                            D
                        </span>
                    </div>
                </td>
                <td>
                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$client->first_name}} {{$client->last_name}}</a></h5>
                    <p class="text-muted mb-0">{{$client->tagline}}</p>
                </td>
                <td>{{$client->email}}</td>
                <td>{{$client->country}}</td>
                <td>{{$client->account_type}}</td>
                <td>
                  <ul class="list-inline font-size-20 contact-links mb-0">
                    <li class="list-inline-item px-2">
                      <a href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-edit"></i></a>
                    </li>
                    <li class="list-inline-item px-2">
                      <a href="" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bx bx-trash-alt"></i></a>
                    </li>
                  </ul>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script-bottom')
<script>
    $(document).ready(function() {
        $('#user-lists').DataTable();
    } );
    
</script>
@endsection
