<?php

namespace App\Http\Controllers;

use App\Mail\OTPMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Show Dashboard
     * 
     * @return \Illuminate\Contracts\View\
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Registration
     * 
     * @return \Illuminate\Contracts\View\View
     */
    public function registration()
    {
        return view('register');
    }

    /**
     * Login Page
     * 
     * @return Illuminate\Contracts\View\View
     */
    public function login()
    {
        if (Auth::check()) {
            return redirect()->back();
        }

        return view('login');
    }

    /**
     * Logout
     * 
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }

    /**
     * User Registration
     * 
     * @param Request $request
     * @return Illuminate\Contracts\View\View
     */
    public function register(Request $request)
    {
        $request->validate([
            'fname'             => 'required',
            'lname'             => 'required',
            'email'             => 'required|email|unique:users,email',
            'password'          => 'required|min:8',
            'password_confirm'  => 'required|same:password'
        ], [
            'fname.required'    => 'The first field is Required',
            'lname.required'    =>  'The last field is Required'
        ]);
        
        $genOtp = rand(1000, 9999);
        $email = $request->email;
       $user = User::insert([
            'name' => $request->fname.' '.$request->lname,
            'email'=> $request->email,
            'password' => bcrypt($request->password),
            'otp'      => $genOtp, 
        ]);

        Mail::to('sinigdho01@gmail.com ')->send(new OTPMail($genOtp));
        return view('otp', compact('email'));
    }

    /**
     * User Sign In
     * 
     * @param Request $request
     * @return \Illuminate\Routing\Redirector
     */
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        
        if (!auth()->attempt($request->only(['email', 'password']))) {
            return redirect()->back();
        }

        if (Auth::user()->type == 'admin') {
            return redirect()->route('admin.dashboard');

        }

        return redirect()->route('dashboard');

    }
}
