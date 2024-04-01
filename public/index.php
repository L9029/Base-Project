<?php

//Front Controller: Es poder centralizar todas las peticiones

require __DIR__ . "/../vendor/autoload.php";

//Se crea una instancia para pedir una solicitud
$request = new App\Http\Request;
$request->send();