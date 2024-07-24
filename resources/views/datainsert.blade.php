@extends('master')
@section('main_content')

<style>
.main_content{
    background:#8AE773;
    height:350px;
    width:550px;
    padding:25px;
    margin:  0 auto;
    margin-top:4px;
}
.input_field input[type=text]{
    width:100%;
    padding:7px;
    border-radius:5px;
    border:1px solid red;
    box-sizing:border-box;
}

.input_field input[type=email]{
    width:100%;
    padding:7px;
    border-radius:5px;
    border:1px solid red;
    box-sizing:border-box;
}
.input_field textarea{
    width:100%;
    padding:7px;
    height:100px;
    border-radius:5px;
    border:1px solid red;
    box-sizing:border-box;
}
.input_field  label{
    color:#0f0909;
    font-family:initial;
    font-weight:bold;
    letter-spacing: 1px;
    
}
.input_field button[type=submit]{
    background:rgb(112, 16, 221);
    padding:10px;
    color:white;
    border-radius:5px;
    width:100px;
    border:none;
    cursor: pointer;
}
.text_denger{
    color:red;
    font-size:25px;
    font-weight:bold;
}
.successmessages{
    background:#98C379;
    padding:10px;
    border:5px;
}
.span_color{
    color:rgba(0, 0, 0, 0.87);
}
</style>
   <div class="main_content">
    @if (session('success'))
        <div class="successmessages">
             <span class="span_color">{{ session('success') }}</span>
        </div>
    @endif
       <form method="POST"action="{{ url('datainsert/intodata') }}"enctype="multipart/form-data">
        @csrf
        <div class="input_field">
           <label>Guest Name</label><br/>
           <input type="text"name="guest_name"placeholder="Enter Your Guest Name"value="{{ old('guest_name') }}">
           @error('guest_name')
               <span class="text_denger">{{ $message }}</span>
           @enderror
       </div>
        <div class="input_field">
           <label>Guest Email</label><br/>
           <input type="email"name="guest_email"placeholder="Enter Your Guest Email"value="{{ old('guest_email') }}">
            @error('guest_email')
               <span class="text_denger">{{ $message }}</span>
           @enderror
       </div>
        <div class="input_field">
           <label>Guest Messages</label><br/>
           <textarea type="text"name="guest_messages"placeholder="Enter your Guest Messages"></textarea>
             @error('guest_messages')
               <span class="text_denger">{{ $message }}</span>
           @enderror
       </div>
        <div class="input_field">
           <button type="submit"name="submit">Submit</button>
       </div>
       </form>
   </div>
@endsection