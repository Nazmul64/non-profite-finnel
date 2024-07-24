@extends('master')

@section('main_content')

<style>
   .datashow{
    background:#8AE773;
    margin-top:25px;
    overflow: hidden;
    width:1000px;
    height:auto;
    margin:0 auto;
   }
   .main-table table{
     width:1000px;
     border:1px solid rebeccapurple;
     padding:2px;
   }
    .main-table  table thead th{
        border:1px solid tomato;
        padding:10px;
    }
     .main-table  table thead{
        background:white;
     }
     .main-table  table tbody td{
        border:1px solid tomato;
        padding:10px;
    }
/* .main-table  table tbody td:hover{
    background:#955CF5;
    transition:.5s;
    color:white;
} */
.deleteid{
    background:red;
    color:white;
    padding:10px;
    text-decoration:none;
}
.datashowmessages{
    background:#a10c39;
    width:800px;
    margin:0 auto;
}
.text_algincenter{
    text-align:center;
    color:white;
}
 .restore{
    background:green;
    padding:10px;
    text-decoration:none;
    box-sizing:border-box;
     margin-right:2px;
     text-align:center;
     color:white;
 }
 .diplay{
    display:flex;
    margin-right:2px;
 }
 .green{
    background:white;
    color:rgb(24, 48, 155));
 }
 .white_color{
    background:white;
    color:rgb(190, 35, 35);
 }
</style>
 <div class="datashow" style="margin-top:20px">
    <span class="total_user">Total User:{{ $showdata->count() }}</span>
     <div class="main-table">
      @if (session('deleted'))
        <div class="successmessages">
             <span class="span_color">{{ session('deleted') }}</span>
        </div>
     @endif
         <table  class="">
              <thead>
                   <tr>
                       <th>Guest Name</th>
                       <th>Guest Email</th>
                       <th>Guest Messages</th>
                       <th>Guest Messages Send Time</th>
                       <th>status</th>
                       <th>Action</th>
                   </tr>
              </thead>
              <tbody>
                @foreach ($showdata as $showdata )
                    <tr class="
                     @if ( $showdata->status=='unread'? 'green': '')
                        white_color 
                     @endif
                    ">
                       <td>{{ $showdata->guest_name}}</td>
                       <td>{{ $showdata->guest_email}}</td>
                       <td>{{ $showdata->guest_messages}}</td>
                       <td>{{ $showdata->created_at->format('m/d/Y')}}</td>
                       <td>{{ $showdata->status}}</td>
                       <td class="diplay">
                           <a href="{{ url('usermessages/delete') }}/{{ $showdata->id }}" class="deleteid">Delete</a>
                           <a href="{{ url('messages/details') }}/{{ $showdata->id }}" class="restore">details</a>
                       </td>

                   </tr>
                @endforeach
                @if ($showdata->count()==0)
                     <tr class="datashowmessages">
                         <td class="text_algincenter">Now Data To Show Messages</td>
                     </tr>
                @endif
              </tbody>
         </table>
     </div>
 </div>
 <div class="datashow" style="margin-top:20px">
    <span class="total_user">Total Delete User:{{ $softdeleted ->count() }}</span>
     <div class="main-table">
      @if (session('forcedelete'))
        <div class="successmessages">
             <span class="span_color">{{ session('forcedelete') }}</span>
        </div>
     @endif
         <table  class="">
              <thead>
                   <tr>
                       <th>Guest Name</th>
                       <th>Guest Email</th>
                       <th>Guest Messages</th>
                       <th>Guest Messages Send Time</th>
                       <th>Action</th>
                   </tr>
              </thead>
              <tbody>
                @forelse ($softdeleted as $softdeleted )
                    <tr>
                       <td>{{ $softdeleted->guest_name}}</td>
                       <td>{{ $softdeleted->guest_email}}</td>
                       <td>{{ $softdeleted->guest_messages}}</td>
                       <td>{{ $softdeleted->created_at->format('m/d/Y')}}</td>
                       <td class="diplay">
                            <a href="{{ url('force/delete') }}/{{ $softdeleted->id }}" class="deleteid">ForceDelete</a>
                            <a href="{{ url('restore') }}/{{ $softdeleted->id }}" class="restore">Restore</a>
                       </td>

                   </tr>
                @empty
                     <tr class="datashowmessages">
                         <td class="text_algincenter">Now Data To Show Messages</td>
                     </tr>
                @endforelse
              </tbody>
         </table>
     </div>
 </div>
@endsection
