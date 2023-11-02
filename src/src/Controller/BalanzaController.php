<?php

namespace App\Controller;

use App\Service\CustomService as ServiceCustomService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Profesor;
use App\Entity\Alumno;
use App\Entity\Cobro;
use App\Entity\Pagos;

/**
 * @Route(path="/api")
*/

class BalanzaController extends AbstractController
{

    /**
     * @Route("/balance-general", name="app_balance", methods={"GET"})
    */    
    public function getBalanceGeneral(ManagerRegistry $doctrine, ServiceCustomService $cs) : Response {
        
        $em = $doctrine->getManager();

        $cobrosRepository = $em->getRepository( Cobro::class );
        $cobrosG = $cobrosRepository->findAll();
        
        $pagosRepository = $em->getRepository( Pagos::class );
        $pagosG = $pagosRepository->findAll();

        $alumnoRepository = $em->getRepository( Alumno::class );
        $alumnos = $alumnoRepository->findAll();

        $profesorRepository = $em->getRepository( Profesor::class );
        $profesores = $profesorRepository->findAll();


        $totalCobros = 0;
        $totalPagos = 0;

        // Pagos y cobros generales        
        $totalCobros += $cs->totalMontos($cobrosG);
        $totalPagos += $cs->totalMontos($pagosG);

        // Calcula la suma de los montos de los cobros de los alumnos
        foreach ($alumnos as $alumno) {
            $cobros = $alumno->getCobros();
            $totalCobros += $cs->totalMontos($cobros);
    
        }

        //Idem, pero con profesores
        foreach ($profesores as $profesor) {
            $pagos = $profesor->getPagos();
            $totalPagos += $cs->totalMontos($pagos);
        }

        $balanceGeneral = $totalCobros - $totalPagos;

        $responseData = [
            'totalCobros' => $totalCobros,
            'totalPagos' => $totalPagos,
            'balanceGeneral' => $balanceGeneral
        ];

        $response = new JsonResponse($responseData);

        return $response;
    }


}
