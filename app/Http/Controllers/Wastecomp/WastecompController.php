<?php

namespace App\Http\Controllers\Wastecomp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Wastecomp;
use Illuminate\Support\Facades\Auth;

class WastecompController extends Controller
{
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:wastecomps,email',
           'company_name'=>'required',
           'password'=>'required|min:5|max:30',
           'confirm_password'=>'required|min:5|max:30|same:password'
        ]);

        $wastecomp = new Wastecomp();
        $wastecomp->name = $request->name;
        $wastecomp->email = $request->email;
        $wastecomp->company_name = $request->company_name;
        $wastecomp->password = \Hash::make($request->password);
        $save = $wastecomp->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as Foodwaste Facility');
        }else{
            return redirect()->back()->with('failed','Something went Wrong, failed to register');
        }
  }

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:wastecomps,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'This email does not exist in the database'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('wastecomp')->attempt($creds) ){
          return redirect()->route('wastecomp.home');
      }else{
          return redirect()->route('wastecomp.login')->with('failed','Incorrect Credentials');
      }
  }

  function logout(){
      Auth::guard('wastecomp')->logout();
      return redirect('/');
  }
}
