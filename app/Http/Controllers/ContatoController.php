<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    public function index() {

        $contatos = [
            (object)["nome"=>"Maria", "tel"=>"211232"],
            (object)["nome"=>"Pedro", "tel"=>"12132"],
        ];

        $contato = new Contato();
        dd($contato->lista()->nome);

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req) {
        dd($req->all());
        return 'Esse é o criar do contato controller';
    }

    public function editar() {
        return 'Esse é o editar do contato controller';
    }
}
