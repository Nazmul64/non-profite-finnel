<?php declare(strict_types=1); 

namespace App\Http\Controllers;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
    function changepassword(Request $request){
      $request->validate([
         'old_password'=>'required',
         'password'=>'required | min:8 | confirmed',
         'password_confirmation' =>'required ',
      ]);
   if(Hash::check($request->old_password,Auth::user()->password)){
        if($request->password==$request->password_confirmation){
         User::find(Auth::id())->update([
            'password'=>Hash::make($request->password),
         ]);
         return back()->with('password','Password updated successfully');
    }else{
           return back()->withErrors('ConfirmationPassword does not match');
    }
    }else{
        return back()->with('error','Old Password does not match');
    }
}
}