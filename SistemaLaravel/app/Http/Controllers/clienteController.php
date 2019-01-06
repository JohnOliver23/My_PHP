<?php

namespace Sistema\Http\Controllers;

use Illuminate\Http\Request;
use \Sistema\Cliente;

class clienteController extends Controller
{
    function index(){
        return view('form');
    }
    function add(Request $request){
        $cli = new Cliente;
        $cli->id = null;
        $cli->nome = $request->input('nome');
        $cli->email = $request->input('email');
        $cli->telefone = $request->input('telefone');
        $cli->save();
        return view('listaClientes')->with('clientes',Cliente::all());
    }

    public function delete($name)
    {
        $cli = Cliente::where('nome',$name);
        if($cli){
            $cli->delete();
        }
        return view('listaClientes')->with('clientes',Cliente::all());
    }

   
}
