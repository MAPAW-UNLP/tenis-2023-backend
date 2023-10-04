<?php
namespace App\Controller;

use App\Entity\Profesor;
use App\Entity\Usuario;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ProfesorController extends AbstractController
{
    /**
     * @Route("/teachers", name="app_teachers", methods={"GET"})
     */
    public function getProfesores(): Response
    {
        $profesores = $this->getDoctrine()->getRepository( Profesor::class )->findAll();
        return $this->json($profesores);
    }
}