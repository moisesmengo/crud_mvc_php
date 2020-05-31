<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Encomenda;

class HomeController extends Controller {

    public function index() {
        $encomendas = Encomenda::select(['encomendador', 'valor', 'entrega', 'id'])->execute();
        $this->render('home', [
            'encomendas' => $encomendas
        ]);
    }
}