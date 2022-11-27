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
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            dd('logado');
        }else{
            dd('nao logado');
        }
    }
}
