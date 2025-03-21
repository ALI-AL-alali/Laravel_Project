<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('controlPanel.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email', 
            'password' => 'required|string|min:6',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    

        return redirect()->route('home');
    }

    
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}