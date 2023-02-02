<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function register_view()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('login')->withError('error');
    }

    public function register(Request $request)
    {
        
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'phone'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required'
            


        ]);

        // save in user table
        User::create([
            'fname'=>$request->fname,
            'lname'=>$request->lname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);

        // login user
        if(Auth::attempt($request->only('email','password'))){
            return redirect('home');
        }
        return redirect('register')->withError('error');
        
    }
    public function home()
    {
       return view('home');
    }
    public function logout()
    {
    //    session::flush();
       Auth::logout();
       return redirect('login');
    }
}
