<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $fill = $request->fill;
        $contatos = Contato::where(function($query) use ($search){
            if($search){
                $query->where('nome', 'LIKE', "%{$search}%");
                $query->orWhere('telefone', 'LIKE', "%{$search}%");
                $query->orWhere('email', 'LIKE', "%{$search}%");
                $query->orWhere('assunto', 'LIKE', "%{$search}%");
            }
        })
        ->orderBy('created_at', 'asc')
        ->paginate(10)
        ->withQueryString();

        return view('admin.contato.contatos',compact('contatos'));
    }

    public function show($id){
        if(!$contato = Contato::find($id)){
            return redirect()->back();
        }

        return view('admin.visualizar-contato', compact('contato'));
    }

    public function create(){
        return view('user.contato');
    }

    public function store(Request $request){
        Contato::create($request->all());
        return redirect()->route('contato.create');
    }

    public function delete($id){
        if(!$contato = Contato::find($id)){
            return redirect()->back();
        }
        $contato->delete();

        return redirect()->route('contato.index');
    }
}
