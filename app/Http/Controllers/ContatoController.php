<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"968769192"],
            (object)["nome"=>"Pedro", "tel"=>"291967869"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $request)
    {
        dd($request->all());
        return "Esse é o criar do ContatoController";
    }

    public function editar()
    {
        return "Esse é o editar do ContatoController";
    }
}
