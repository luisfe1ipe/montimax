<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function auth(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => true])){
            return redirect()->route('projeto.index');
        }

        return redirect()->route('admin.login')->with('mensagem', 'E-mail ou senha inválidos');
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('admin.login');
        }
    }
}
