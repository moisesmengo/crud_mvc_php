<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Encomenda;

class EncomendasController extends Controller {

   public function add(){
       $this->render('add');
   }

   public function addEncomenda(){
       $encomendador = filter_input(INPUT_POST, 'encomendador');
       $valor = filter_input(INPUT_POST, 'valor');
       $inicio = filter_input(INPUT_POST, 'inicio');
       $entrega = filter_input(INPUT_POST, 'entrega');
       $descricao = filter_input(INPUT_POST, 'descricao');

       if($encomendador && $valor && $inicio && $entrega && $descricao){
            Encomenda::insert([
                'encomendador' => $encomendador,
                'valor' => $valor,
                'inicio' => $inicio,
                'entrega' => $entrega,
                'descricao' => $descricao
            ])->execute();
            // redirect para home
            $this->redirect('/');

            echo 'inseriu';
            exit;
       }else{
            //redirect para add
            $this->redirect('/novo');
       }
   }

}