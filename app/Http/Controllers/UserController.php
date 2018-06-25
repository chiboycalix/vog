<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
 public function login(Request $request){
   if(Auth::attempt(['name'=>$request['name'], 'password'=>$request['password']])){
       return redirect()->route('dashboard');
   }else{
       return back();
   }
 }
}
