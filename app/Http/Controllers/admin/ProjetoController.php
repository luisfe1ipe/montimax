<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateProjetoFormRequest;
use App\Models\Projeto;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjetoController extends Controller
{

    public function index(Request $request)
    {
        $user = User::first();

        $projetos = Projeto::where('titulo',  'LIKE', "%{$request->search}%")
            ->orderBy('created_at', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('user.projetos', compact('projetos', 'user'));
    }

    public function show($id)
    {

        if (!$projeto = Projeto::find($id)) {
            return redirect()->back();
        }

        return view('user.visualizar-projeto', compact('projeto'));
    }


    public function create()
    {
        return view('admin.projeto.criar');
    }

    public function store(StoreUpdateProjetoFormRequest $request)
    {
        $data = $request->all();

        if ($request->file('img_principal')) {
            $imgNamePrincipal = time() . '.' . $request->img_principal->extension();
            $request->img_principal->move(public_path('img-projetos/principal'), $imgNamePrincipal);
            $data['img_principal'] = $imgNamePrincipal;
        }


        if ($request->file('img_secundaria')) {
            $imgNameSecundaria =  time() . '.' . $request->img_secundaria->extension();
            $request->img_secundaria->move(public_path('img-projetos/secundaria'), $imgNameSecundaria);
            $data['img_secundaria'] = $imgNameSecundaria;
        }

        if($request->file('img_terciaria')){
            $imgNameTerciaria = time() . '.' . $request->img_terciaria->extension();
            $request->img_terciaria->move(public_path('img-projetos/terciaria'), $imgNameTerciaria);
            $data['img_terciaria'] = $imgNameTerciaria;
        }

        Projeto::create($data);
        

        return redirect()->route('projeto.index');
    }

    public function edit($id)
    {

        if (!$projeto = Projeto::find($id)) {
            return redirect()->back();
        }

        return view('admin.projeto.editar', compact('projeto'));
    }

    public function update(StoreUpdateProjetoFormRequest $request, $id)
    {

        $data = $request->all();

        if (!$projeto = Projeto::find($id)) {
            return redirect()->back();
        }


        if ($request->img_principal) {
            if (file_exists(public_path('img-projetos/principal/' . $projeto->img_principal))) {
                unlink(public_path('img-projetos/principal/' . $projeto->img_principal));
            }
            $imgNamePrincipal = $request->titulo . '-' . time() . '.' . $request->img_principal->extension();
            $request->img_principal->move(public_path('img-projetos/principal'), $imgNamePrincipal);
            $data['img_principal'] = $imgNamePrincipal;
        }


        if ($request->img_secundaria) {
            if (file_exists(public_path('img-projetos/secundaria/' . $projeto->img_secundaria))) {
                unlink(public_path('img-projetos/secundaria/' . $projeto->img_secundaria));
            }
            $imgNameSecundaria = $request->titulo . '-' . time() . '.' . $request->img_secundaria->extension();
            $request->img_secundaria->move(public_path('img-projetos/secundaria'), $imgNameSecundaria);
            $data['img_secundaria'] = $imgNameSecundaria;
        }

        if ($request->img_terciaria) {
            if(file_exists(public_path('img-projetos/terciaria/' . $projeto->img_terciaria))){
                unlink(public_path('img-projetos/terciaria/' . $projeto->img_terciaria));
            }
            $imgNameTerciaria = time() . '.' . $request->img_terciaria->extension();
            $request->img_terciaria->move(public_path('img-projetos/terciaria'), $imgNameTerciaria);
            $data['img_terciaria'] = $imgNameTerciaria;
        }


        $projeto->update($data);

        return redirect()->route('projeto.index');
    }
    

    public function delete(Request $request)
    {
        $id = $request->projeto_deletar_id;


        if (!$projeto = Projeto::find($id)) {
            return redirect()->back();
        }

        if ($projeto->img_principal) {
            if (file_exists(public_path('img-projetos/principal/' . $projeto->img_principal))) {
                unlink(public_path('img-projetos/principal/' . $projeto->img_principal));
            }
        }

        if ($projeto->img_secundaria) {
            if (file_exists(public_path('img-projetos/secundaria/' . $projeto->img_secundaria))) {
                unlink(public_path('img-projetos/secundaria/' . $projeto->img_secundaria));
            }
        }

        $projeto->delete();


        return redirect()->route('projeto.index');
    }
}
