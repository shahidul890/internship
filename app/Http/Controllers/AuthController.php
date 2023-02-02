<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function signup(){
    return view('auth.signup');
   }
public function signup_submit(Request $request)
{
    
    $request->validate([
        'fname'=>'required',
        'lname'=>'required',
        'mobile'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required|min:5'
      ]);
User::create([
    'name'=>$request->fname .' '. $request->lname,
    'email'=>$request->email,
    'mobile'=>$request->mobile,
    'password'=>bcrypt($request->password)
]);
return to_route('login')->with('success','Registration Succesfull');
}





   public function login(){
    return view('auth.login');
   }
   public function dashboard(){
    return view('auth.dashboard');
   }
public function otp(){
    return view('auth.otp');
}


   
 public function loginSubmit(Request $request){
    $credentials=$request->except('_token');
    $authentication=auth()->attempt($credentials);
    if($authentication){
        return to_route('dashboard')->with('success','Login successful');}
    else{
        return to_route('signup');
    }

 }
 public function logout(){
 auth()->logout();
 return to_route('login')->with('success','Logout Succesfull');
 }
}
