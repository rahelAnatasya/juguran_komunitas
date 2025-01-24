<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('dashboard')->with('success', 'Login Berhasil');
        }
        return redirect()->route('login')->with('error', 'Login Gagal !, Username atau password salah !');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
