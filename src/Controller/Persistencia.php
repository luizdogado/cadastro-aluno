<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Persistencia implements InterfaceControllerRequisition
{
    /**
     * @var \Doctrine\ORM\EntityManagerInterface
     */
    private $entityManager;

    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())->getEntityManager();
    }


    public function processaRequisicao(): void
    {
        $descricao = filter_input(
            INPUT_POST,
            'descricao',
            FILTER_SANITIZE_STRING);
            
        $curso = new Curso();
        $curso->setDescricao($_POST['descricao']);
    
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
    }

    public function edit($id = null)
    {
        $curso = new Curso();
        
        if($_POST) {
            if($id) {
                $curso->setDescricao($_POST['descricao']);
                $curso->setID($_POST['id']);
            }
        } else {
            $curso->getDescricao($id);
        }
    
        $this->entityManager->persist($curso);
        $this->entityManager->flush();
    }
}
