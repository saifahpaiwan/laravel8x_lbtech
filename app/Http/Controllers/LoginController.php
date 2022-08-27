<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Arr;
use session;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function home()
    {
        // dd(session()->get('session_root'));
        return view('auth.home');
    } 

    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]); 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if(!empty(auth()->user()->id)){ 
                session()->get('session_root'); 
                $arr = array(
                    "name" => "นาบ A",
                    "email" => "dev.phaiwan",
                );
                session()->put('session_root', $arr); 
                return redirect()->route('home')->with("success", "ล็อกอินสำเร็จ ..");
            }
        }  
        return redirect()->route('login')->with("error", "ล็อกอินไม่สำเร็จ ..");
    }

    public function logout()
    {  
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
