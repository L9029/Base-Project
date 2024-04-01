<?php

namespace App\Http;

class Response{
    protected $view; //Puede ser tanto un array, json, pdf...

    public function __construct($view){
        $this->view = $view;
    }

    public function getView(){
        return $this->view;
    }

    //Realiza la busqueda de la vista que necesita enviar de forma dinamica
    public function send(){
        $view = $this->getView();

        //file_get_contents() sirve para almacenar un sitio web o un archivo en una variable tipo string
        $content = file_get_contents(__DIR__ . "/../../views/$view.php");

        require __DIR__ . "/../../views/layout.php";
    }
}