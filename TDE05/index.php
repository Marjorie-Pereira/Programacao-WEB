<?php



$controller = $_GET['controller'];
$metodo = $_GET['acao'];

$controller .= 'Controller';

const FOLDER = 'aula3';

require_once $_SERVER['DOCUMENT_ROOT'] . "/" . FOLDER . '/controller/'. $controller. '.php';



$objeto = new $controller();
$objeto->$metodo();

// $estudanteController = new $classe();
// $estudanteController->$metodo();