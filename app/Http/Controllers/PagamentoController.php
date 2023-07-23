<?php

namespace App\Http\Controllers;

use App\Models\Pagamentos;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function savepay(Request $request){
        //receber dados da view dum request
        $reg_pag = new Pagamentos();
        $reg_pag->data_pag = $_POST['data_pag'];
        $reg_pag->valor_pag = $_POST['valor_pag'];
        $reg_pag->tipo = $_POST['tipo'];
        $reg_pag->data_ven = $_POST['data_ven'];//ja foi retirado deste local para cliente
        //$reg_pag->descricao = $_POST['descricao'];
        $reg_pag->id_client_fk = $_POST['id_client_fk'];
        if ($reg_pag->save()){
            $mesagemSucesso = "Objectivo criado com sucesso";
            return response(compact('mesagemSucesso', 'funcao_obj'));
        }
        $mesagemErro = "Falha ao criar objectivo";
        return response(compact('mesagemErro', 'funcao_obj'));
        //descodificar o request
        //Validar
        //inserir na base de dados

    }
}
