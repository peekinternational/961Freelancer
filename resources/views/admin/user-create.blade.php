@extends('admin.layouts.master')
@section('title') Create New User @endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin-assets/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
<!-- dropzone css -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('admin-assets/assets/libs/dropzone/min/dropzone.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/intlTelInput.min.css')}}">
<style>
  .iti__divider,.iti__country{
    list-style: none;
  }
  .iti{
    width: 100%;
  }
  .select2-container .select2-selection--single {
    height: calc(1.5em + .94rem + 2px) !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 36px !important;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    top: 5px !important;
  }
</style>
@endsection
@section('content')

@component('admin.common-components.breadcrumb')
@slot('title') Create New @endslot
@slot('li_1') User @endslot
@slot('li_2') Create New @endslot
@endcomponent
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Create New User</h4>
        <form id="create-user-form">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formrow-firstName-input">First Name</label>
                <input type="text" class="form-control" name="first_name" id="formrow-firstName-input">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="formrow-lastName-input">Last Name</label>
                <input type="text" class="form-control" name="last_name" id="formrow-lastName-input">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="formrow-userName-input">User Name</label>
                <input type="text" class="form-control" name="username" id="formrow-userName-input">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="formrow-email-input">Email</label>
                <input type="email" class="form-control" name="email" id="formrow-email-input">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" class="form-control" name="mobile_number" id="phone" >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="formrow-email-input">Account Type</label>
                <select name="account_type" class="form-control">
                  <option value="">Select Type</option>
                  <option value="Freelancer">Freelancer</option>
                  <option value="Client">Client</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="formrow-email-input">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password">
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary btn-lg">Add User</button>
            </div>
          </div>
        </form>
        
      </div>
    </div>
  </div>
</div>
<!-- end row -->
@endsection
@section('script')
<!-- bootstrap datepicker -->
<script src="{{ URL::asset('admin-assets/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<!-- dropzone plugin -->
<script src="{{ URL::asset('admin-assets/assets/libs/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{ URL::asset('admin-assets/assets/js/jqueryvalidate/jquery.validate.min.js')}}"></script>
<script src="{{ URL::asset('admin-assets/assets/js/jqueryvalidate/additional-methods.min.js')}}"></script>
<script src="{{asset('assets/js/intlTelInput.min.js')}}"></script>
@endsection
@section('script-bottom')
<script>
    function catImg(input) {

      if (input.files && input.files[0]) {
          var reader = new FileReader();
          console.log(reader);
          reader.onload = function (e) {
              $('#icon_show')
                  .attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
      
    }
</script>

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('.select2').select2();
var phone_number = window.intlTelInput(document.querySelector("#phone"), {
  separateDialCode: true,
  hiddenInput: "full",
  utilsScript: "/assets/js/utils.js",
  excludeCountries: ["il"]
});
  // var input = document.querySelector("#phone");

  $("#create-user-form").validate({


      errorPlacement:function (error , element) {
        error.insertAfter(element.parents(".form-group"))
      },
          rules: {
              first_name: {
                  required: true,
                  // lettersonly: true
              },
              last_name: {
                  required: true,
                  // lettersonly: true
              },
              username: {
                  required: true,
                  // email: true
              },
              email: {
                  required: true,
                  // number: true
              },
              account_type: {
                  required: true,
                  
              },
              password: {
                  required: true,
              },


          },
          messages: {
              first_name: {
                  required: "Please select first name",

              } ,
              last_name: {
                  required: "Please enter last name",

              } ,
              username: {
                  required: "Please select username",

              } ,
              email: {
                  required: "Please select email",
                  // number: "Please enter valid integer",
              } ,
              account_type: {
                  required: "Please enter account type",

              } ,
              password: {
                  required: "Please select password",

              } ,

          },

          submitHandler: function(form) {
             form_Create(form);
          }

    });


  function form_Create(formData) {
//    let createFormData = $('#formCreate').serialize();
var createFormData = new FormData (formData);
    // console.log(createFormData);
    $.ajax({
        url: "{{route('admin.users.store')}}",
        type: 'POST',
        data: createFormData,
        contentType: false,
        processData: false,

        success: (response)=>{
            if (response.status == 'true') {
                $.notify(response.message , 'success'  );
                if(response.userType == 'Freelancer'){
                  window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/freelancers-list/";
                }else{
                  window.location.href = window.location.protocol + '//' + window.location.hostname +":"+window.location.port+"/admin/clients-list/";
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