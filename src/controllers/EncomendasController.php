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

   public function edit($id){
        $encomenda = Encomenda::select()->where('id', $id['id'])->one();
        $this->render('edit', [
            'encomenda' => $encomenda,
        ]);
   }

   public function editAcao($id){
        $encomendador = filter_input(INPUT_POST, 'encomendador');
        $valor = filter_input(INPUT_POST, 'valor');
        $inicio = filter_input(INPUT_POST, 'inicio');
        $entrega = filter_input(INPUT_POST, 'entrega');
        $descricao = filter_input(INPUT_POST, 'descricao');

        if($encomendador && $valor && $inicio && $entrega && $descricao){
            Encomenda::update()
                ->set('encomendador', $encomendador)
                ->set('valor', $valor)
                ->set('inicio', $inicio)
                ->set('entrega', $entrega)
                ->set('descricao', $descricao)
                ->where('id', $id['id'])
                ->execute();

                $this->redirect('/');
        }

        $this->redirect('/encomenda/.$id["id"]./editar');
   }

   public function del($id){
       
    }

}