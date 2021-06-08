<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\DataBase\Eloquent\Model;

class HomeController extends Controller
{
    //
    public function index(){

        

        return view('home');
    }

    public function cadastrar(Request $request){

        if($request->filled('tipo_cliente')){
            $request->validate([
                'nome_cliente' => [ 'string', 'required' ],
                'nome_negocio' => [ 'string', 'required' ],
                'seguimento' => [ 'string', 'required' ],
                'tipo_cliente' => [ 'string', 'required'  ],
                'email' => [ 'string', 'required',],
                'email_confirmation' => [ 'string', 'required' ],
                'estado' => [ 'string', 'required' ],
                'telefone' => [ 'string', 'required' ]
            ]);

            if($request->filled('nome_negocio')){
                $c = new Cadastro;
                $c->nome = $request->input('nome_cliente');
                $c->email = $request->input('email');
                $c->telefone = $request->input('telefone');
                $c->nome_restaurante = $request->input('nome_negocio');
                $c->seguimento = $request->input('seguimento');
                $c->save();
            }
        }

        return redirect()
                ->route('index')
                ->with('success', 'Pre cadastro realizado com sucesso!');
    }
}
