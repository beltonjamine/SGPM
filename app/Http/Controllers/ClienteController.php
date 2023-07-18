<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function CreatCliente(){
        //receber dados da view dum request
        //descodificar o request
        //Validar
        //inserir na base de dados
        return "sucesss";
    }

    public function listaTodosClientes(){
        //selecionar todos clientes na base de dados
        //retornar array com array de clientes
        $clientes = 0;
        return $clientes;
    }
}
