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
                  <form method="POST"action="{{ route('profileview.changename ') }}">
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
                <div class="card-header bg-success text-white">Change Password</div>
                <div class="card-body">
                  <form method="POST">
                   <div class="mt-2">
                      <label>Old Password</label>
                      <input type="password"class="form-control"placeholder="Enter Name"name="password">
                   </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
