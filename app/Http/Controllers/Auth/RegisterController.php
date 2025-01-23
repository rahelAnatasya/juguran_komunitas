<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{

    public function index(){
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }


    public function store(RegisterRequest $request){
        $data = $request->validated();
        $user = User::create($data);

        return redirect('/')->with('success', 'Registrasi Berhasil');
    }
}
