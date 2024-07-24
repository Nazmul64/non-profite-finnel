<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Usermessages;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function datashow(){
       $showdata=Usermessages::latest()->get();
       $softdeleted =Usermessages::onlyTrashed()->get();
     return view('datashow',compact('showdata','softdeleted'));
    }
    function datainsert(){
        return view('datainsert');
    }
   function datainsertintodata(Request $request){
      $request->validate([
         'guest_name'=>'required',
         'guest_email'=>'required | email ',
         'guest_messages'=>'required',
      ]);
      Usermessages::create([
        'guest_name' =>$_POST['guest_name'],
        'guest_email' =>$_POST['guest_email'],
        'guest_messages' =>$_POST['guest_messages'],
      ]);
      return back()->with('success','Data insert successful!');
   }
   function usermessagesdelete($id){
      Usermessages::find($id)->delete();
      return back()->with('deleted','Data Deleted Succssfullly!');
   }
   function forcedelete($id){
      Usermessages::onlyTrashed()->find($id)->forceDelete();
      return back()->with('forcedelete','ForceDeleteed Successfully');
   }
   function restore($id){
    Usermessages::onlyTrashed()->find($id)->restore();
       return back()->with('restore','Restore Successfully');
   }
function messagesdetails($id){
    Usermessages::find($id)->update([
        'status'=>'read',
    ]);
  $showdata=Usermessages::find($id);
  return view('contactdtails',compact('showdata'));
}
}

