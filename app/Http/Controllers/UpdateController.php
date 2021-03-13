<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UpdateController extends Controller
{
  public function update()
  {
  return view('update_profile')->with('user',auth()->user());
  }


  public function change(Request $request)
  {
$user = Auth::user();
$user->update([
  'name'=>$request->name,
  'email'=>$request->email,

]);
return redirect()->route('login');

  }


  public function updatePassword()
  {
  return view('update_password')->with('user',auth()->user());
  }

}
