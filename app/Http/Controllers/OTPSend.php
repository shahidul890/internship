<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class OTPSend extends Controller
{
    /**
     * OTP Varification
     * 
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request) 
    {
            $request->validate([
                'otp'   => 'required|numeric',
                'email' => 'required|exists:users,email'
            ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();
        $otp = $user->otp;
        $userOtp = $request->otp;

        if($otp == $userOtp)
        {
            \Auth::loginUsingId($user->id);
            $user->update([
                'otp' => null,
                'email_verified_at' => Carbon::now(),
            ]);
            
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
}
