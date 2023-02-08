<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function store(Request $request){
        $projeto = new Portfolio();

        $projeto->nomeProjeto = $request->nomeProjeto;
        $projeto->descricaoProjeto = $request->descricaoProjeto;
        $projeto->capa = $request->capa;
        $projeto->filename= $request->filename;

        $projeto->save();
        return redirect('/');
    }

    public function enviar(){
        return view('portfolios.portfolios-projeto');
    }

    public function index() {
        $projetos = Portfolio::all();
        return view('portfolio', ['projetos' => $projetos]);
    }

}
