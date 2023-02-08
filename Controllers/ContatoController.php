<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function store(Request $request){
        $contato = new Contato;

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->fone = $request->fone;
        $contato->mensagem = $request->mensagem;

        $contato->save();
        return redirect('/');
    }

    public function enviar(){
        return view('contatos.contato');
    }

}
