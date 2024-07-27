<?php declare(strict_types=1); 

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    function profileview(){
     return view('profile.profile');
    }
    function changename(Request $request){
      User::find(Auth::user()->id)->update([
         'name' =>$request->name,
      ]);
      return back()->with('success','Name updated successfully');
       
    
    }
}
