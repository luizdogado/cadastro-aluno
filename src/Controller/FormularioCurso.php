<?php

namespace Alura\Cursos\Controller;

class FormularioCurso implements InterfaceControllerRequisition 
{
    
    public function processaRequisicao(): void
    {
        $titulo = 'Novo Curso';
        require __DIR__ . '/../../view/cursos/view-formulario.php';
    }
}