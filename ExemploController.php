<?php
namespace Application\controllers;

use Application\core\Controller;
use Application\models\helper\Header;

class ExemploController extends Controller
{
    public function listing()
    {
        $header = new Header();
        $header->setTitle("Exemplo Titulo");
        $header->setNamePage("Exemplo Nome da Página");

        $data = [
            "header" => $header,
            "nome" => 'nome'
        ];

        $this->viewSystem('teste/listing',$data);
    }
}
