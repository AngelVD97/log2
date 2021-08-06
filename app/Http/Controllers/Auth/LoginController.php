<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
    public function login(Request $request, Redirector $redirect){

    
        $remember = $request->filled('remember');
    
        if (Auth::attempt($request->only('email', 'password'), $remember)){
            $request->session()->regenerate();
    
            return $redirect
            ->intended('dashboard')
            ->with('status', 'you are login');
        }
       
        throw ValidationException::withMessages([
    
            'email' => __('auth.failed')
        ]);
    

    }

    public function logout(Request $request, Redirector $redirect){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $redirect->to('/')->with('status',"you are logout");
    }
}
