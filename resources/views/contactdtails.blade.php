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
</style>
 <div class="datashow" style="margin-top:20px">
    <span class="total_user">Messages Details Pages:</span>
     <div class="main-table">
         <table  class="">
              <thead>
                   <tr>
                       <th>Guest Name</th>
                       <th>Guest Email</th>
                       <th>Guest Messages</th>
                       <th>Guest Messages Send Time</th>
                   </tr>
              </thead>
              <tbody>
               
                    <tr>
                       <td>{{ $showdata->guest_name}}</td>
                       <td>{{ $showdata->guest_email}}</td>
                       <td>{{ $showdata->guest_messages}}</td>
                       <td>{{ $showdata->created_at->diffForHumans()}}</td>
                      
                   </tr>
              
              </tbody>
         </table>
     </div>
 </div>



 @endsection
