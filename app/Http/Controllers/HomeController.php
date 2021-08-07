<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\DataBase\Eloquent\Model;

class HomeController extends Controller
{
    //
    public function index($id = null){    
        $data = [
            'id' => $id
        ];
        
        return view('home', $data);
    }

    public function cadastrar(Request $request){
        if($request->filled('tipo_cliente')){
            $request->validate([
                'nome_cliente' => [ 'required', 'string' ],
                'tipo_cliente' => [ 'required', 'integer' ],
                'nome_negocio' => [ 'string' ],
                'segmento' => [ 'string' ],
                'email' => [ 'required', 'email' ],
                'email_confirmation' =>[ 'string', 'required', 'email' ],
                'telefone' => [ 'required', 'string' ]
            ]);
    
            $c = new Cadastro;
            if($request->filled('nome_negocio')){

                $email = $request->input('email');

                $c->id_indicador = ( $request->input('id_indicador')?$request->input('id_indicador'):0);
                $c->indicados = 0;
                $c->nome_cliente = $request->input('nome_cliente');
                $c->nome_negocio = $request->input('nome_negocio');
                $c->segmento = $request->input('segmento');
                $c->tipo_cliente = $request->input('tipo_cliente');
                $c->email = $email;
                // $c->estado = $request->input('estado');
                $c->telefone = $request->input('telefone');
                $c->save();

                $id = $c->id;

                if($request->filled('id_indicador')){
                    $c = Cadastro::find($request->input('id_indicador'));
                    $c->indicados = $c->indicados + 1;
                    $c->save();
                }

                Mail::send('mail.precadastro', [ 'id'=>$id ], function($m){
                    $m->from('precadastro@meubandeco.com.br', 'Alison Bucker');
                    $m->to('originalalison@gmail.com', 'Alison BuBucker')->subject('Assunto');
                });

            }
        }

        return redirect()
            ->route('success')
            ->with('success', 'success');
    }

    public function success() {
        return view('success');
    }
}
