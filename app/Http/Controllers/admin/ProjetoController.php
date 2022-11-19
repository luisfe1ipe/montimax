<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function create(){
        return view('admin.projeto.criar');
    }

    public function store( Request $request){

        Projeto::create($request->all());
        
        // return redirect()->route();
    }
}
