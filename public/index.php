<?php

require __DIR__ . '/../vendor/autoload.php';

use Alura\Cursos\Controller\FormularioCurso;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;
$controller = $_SERVER['PATH_INFO'];
$controller = explode('/', $controller);
// print_r($controller);die;

switch ($controller[1]) {
    case 'listar-cursos':
        $controlador = new ListarCursos();
        $controlador->processaRequisicao();
        break;
    case 'novo-curso':
        $controlador = new FormularioCurso();
        $controlador->processaRequisicao();
        break;
    case 'salvar-curso':
        $controlador = new Persistencia();
        $controlador->processaRequisicao();
        break;
    case 'edit-curso':
        $controlador = new Persistencia();
        $controlador->edit($controller[2]);
        break;
    default:
        echo "Erro 404";
}
