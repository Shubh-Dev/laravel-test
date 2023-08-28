<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Passowrd;

class ForgotPasswordController extends Controller
{

    public function showForgotPasswordForm() 
    {
        return view('auth.forgot-password');
    }   
 

    public function sendRequestEmail(Request $request) 
    {
        $request->validate(['email' => 'required|email']);
        $response = Password::sendResetLink($request->only('email'));
        return $response == Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Reset link sent successfully to your email'], 200)
            : response()->json(['message' => 'Email could not be sent'], 400);

    }

    public function callResetPassword(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|string',
            'password' => 'required|string|confirmed'
        ]);
        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->forceFill(['password' => $password])->setRememberToken(Str::random(60));
            $user->save();
        });
        return $response == Password::PASSWORD_RESET
            ? response()->json(['message' => 'Password reset successfully'], 200)
            : response()->json(['message' => 'Password could not be reset'], 400);
    }
 }



