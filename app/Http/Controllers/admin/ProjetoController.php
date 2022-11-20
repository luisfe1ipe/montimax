<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProjetoFormRequest;
use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{

    public function index(Request $request){
        $projetos = Projeto::where('titulo',  'LIKE' , "%{$request->search}%")->orderBy('created_at', 'desc')->get();
        return view('user.projetos', compact('projetos'));
    }

    public function show($id){

        if(!$projeto = Projeto::find($id)){
            return redirect()->back();
        }
        

        return view('user.visualizar-projeto', compact('projeto'));
    }


    public function create(){
        return view('admin.projeto.criar');
    }

    public function store(StoreUpdateProjetoFormRequest $request){
        $data = $request->all();

        if($request->img_principal){
            $data['img_principal'] = $request->img_principal->store('/projetos');
            $data['img_secundaria'] = $request->img_secundaria->store('/projetos/secundaria');
        }


        Projeto::create($data);
        
        return redirect()->route('projeto.index');
    }

    public function edit($id){

        if(!$projeto = Projeto::find($id)){
            return redirect()->back();
        }

        return view('admin.projeto.editar', compact('projeto'));
    }

    public function update(StoreUpdateProjetoFormRequest $request, $id){

        if(!$projeto = Projeto::find($id)){
            return redirect()->back();
        }

        $projeto->update($request->all());

        return redirect()->route('projeto.index');
    }

    public function delete($id){
        if(!$projeto = Projeto::find($id)){
            return redirect()->back();
        }

        $projeto->delete();
        
        return redirect()->route('projeto.index');
    }
}
