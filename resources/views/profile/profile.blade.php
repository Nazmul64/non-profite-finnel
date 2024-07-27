@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
          
            <div class="card">
              @if ( session('success'))
                    <span class="alert alert-info">{{ session('success') }}</span>
               @endif
                <div class="card-header bg-success text-white">Change Name</div>
                <div class="card-body">
                  <form action="{{ route('profileview.changename') }}" method="POST">
                    @csrf
                   <div class="mt-2">
                      <label>Name</label>
                      <input type="text"class="form-control"placeholder="Enter Name"name="name"value="{{ Auth::user()->name }}">
                   </div>
                     <div class="mt-2">
                     <button type="submit" class="btn btn-success">Save</button>
                   </div>
                  </form>
                </div>
            </div>   
        </div>
         <div class="col-md-6">
            <div class="card">
              @if ( session('password'))
                    <span class="alert alert-info">{{ session('password') }}</span>
               @endif
                <div class="card-header bg-success text-white">Change Password</div>
                <div class="card-body">
                  <form action="{{ route('profileview.changepassword') }}" method="POST">
                    @csrf
                   <div class="mt-2">
                      <label>Old Password</label>
                      <input id="password-field" type="password" class="form-control" name="old_password" value="">
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      @error('old_password')
                             <span class="text-danger">{{ $message }}</span>
                        @enderror
                   </div>
                    <div class="mt-2">
                      <label>New Password</label>
                         <input id="password-field" type="password" class="form-control" name="password" value="">
                        <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        @error('password')
                             <span class="text-danger">{{ $message }}</span>
                        @enderror
                   </div>
                   <div class="mt-2">
                      <label>Confirmation Password</label>
                     <input id="password-field" type="password" class="form-control" name="password_confirmation" value="">
                     <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                      @error('confirmation_pass')
                             <span class="text-danger">{{ $message }}</span>
                        @enderror
                   </div>
                   <div class="mt-2">
                     <button type="submit" class="btn btn-success">Update</button>
                   </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="">
 $(".toggle-password").click(function() {
  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@endsection
