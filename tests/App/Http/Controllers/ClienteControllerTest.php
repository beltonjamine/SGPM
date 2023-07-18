<?php
namespace App\Http\Controllers;

use App\Http\Controllers\ClienteController;
//use Illuminate\Foundation\Testing\RefreshDatabase;
//use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

#php artisan test --filter=ClienteControllerTest
class ClienteControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    #php artisan test --filter=ClienteControllerTest::test_CreateCliente
   public function test_CreateCliente(){
    $controller = new ClienteController;
    $resposta_cliente =  $controller->CreatCliente();
    #$this->assertIsArray();
    $this->assertEqualsIgnoringCase(
        "sucesss",
        $resposta_cliente, 
        "expected is not equal to actual ignoring case") ; 
   }

   #php artisan test --filter=ClienteControllerTest::test_listaTodosClientes
   public function test_listaTodosClientes(){
    $controller = new ClienteController;
    $listaclientes =  $controller->listaTodosClientes();
    $this->assertIsArray($listaclientes, "Esperava uma lista de clientes");
    
   }

}
