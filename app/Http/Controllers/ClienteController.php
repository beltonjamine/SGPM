<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function CreatCliente(Request $request){
        //receber dados da view dum request
        $cliente = new Clientes();
        $cliente->nome = $_POST['nome'];
        $cliente->valor_pag = $_POST['valor_pag'];
        $cliente->data_ven = $_POST['data_ven'];
        $cliente->dis_raiz = $_POST['dis_raiz'];
        $cliente->endereco = $_POST['endereco'];
        $cliente->num1 = $_POST['num1'];
        $cliente->num2 = $_POST['num2'];
        $cliente->contrato = $_POST['contrato'];
        if ($cliente->save()){
            $mesagemSucesso = "Objectivo criado com sucesso";
            return response(compact('mesagemSucesso', 'funcao_obj'));
        }
        $mesagemErro = "Falha ao criar objectivo";
        return response(compact('mesagemErro', 'funcao_obj'));
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
