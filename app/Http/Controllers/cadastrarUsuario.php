<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cadastrarUsuarioModel;//Importar a classe que eu quero utilizar

class cadastrarUsuario extends Controller
{
    public function index() {
        $dados = cadastrarUsuarioModel::all();

        return view('paginas.cadastrar')->With('dados',$dados);
    }//Fim do Metodo

    public function store(Request $request){
        $nomeUsuario = $request->input('nome');//Coletando dados do formulario
        $telefoneUsuario = $request->input('telefone');

        $model = new cadastrarUsuarioModel();
        $model->nome = $nomeUsuario;
        $model->telefone = $telefoneUsuario;
        $model->save(); //Armazenar no Banco

        return redirect('/cadastrar');
    }//Fim do Metodo store
}//Fim da Classe
