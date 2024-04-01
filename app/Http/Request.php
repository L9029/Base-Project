<?php

namespace App\Http;

class Request{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct(){
        //Se capturan los segmentos de la url para tomar el controlador y el metodo a utilizar
        $this->segments = explode("/", $_SERVER["REQUEST_URI"]); //Agregar los elementos de la url al arreglo segmentos

        $this->setController();
        $this->setMethod();
    }

    public function setController(){
        //Si el elemento esta vacio
        $this->controller = empty($this->segments[1])
        ? "home" //Llenar por defecto con home
        : $this->segments[1]; //Si hay informacón dejar el mismo elemento
    }

    public function setMethod(){
        //Si el elemento esta vacio
        $this->method = empty($this->segments[2])
        ? "index" //Llenar por defecto con home
        : $this->segments[2]; //Si hay informacón dejar el mismo elemento
    }
}