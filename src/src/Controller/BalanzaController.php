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
            if($cobros){
                $totalCobros += $cs->totalMontos($cobros);
            }

        }

        //Idem, pero con profesores
        foreach ($profesores as $profesor) {
            $pagos = $profesor->getPagos();
            if($pagos){
                $totalPagos += $cs->totalMontos($pagos);
            }
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

    /**
     * @Route("/balance-list-try", name="app_balance_list", methods={"GET"})
     */
    public function getBalanceListTry(ManagerRegistry $doctrine, ServiceCustomService $cs) : Response {

        $em = $doctrine->getManager();

        $cobrosRepository = $em->getRepository( Cobro::class );
        $cobrosG = $cobrosRepository->findAll();

        $pagosRepository = $em->getRepository( Pagos::class );
        $pagosG = $pagosRepository->findAll();

        $statement = $em->getConnection()->prepare(
            "SELECT mov.fecha FROM (
                (SELECT c.id, c.fecha, c.concepto, c.monto, c.descripcion, c.alumno_id as persona_id, a.nombre, 'Cobro' AS tipo
                FROM cobro c INNER JOIN alumno a ON a.id = c.alumno_id) as cobrodata
                UNION
                (SELECT p.id, p.fecha, p.motivo as concepto, p.monto, p.descripcion, p.profesor_id as persona_id, prof.nombre, 'Pago' AS tipo
                FROM pago p INNER JOIN profesor prof ON prof.id = p.profesor_id) as pagodata
            ) as mov 
            ORDER BY mov.fecha DESC"
        );
        $result = $statement->execute();
        $results = $result-> fetchAll();

        // $result = $query->getResult();

        return new JsonResponse($results);
    }

    /**
     * @Route("/balance-list-alt", name="app_balance_alt", methods={"GET"})
     */
    public function getBalanceList(ManagerRegistry $doctrine, ServiceCustomService $cs) : Response {

        $em = $doctrine->getManager();

        $cobrosRepository = $em->getRepository( Cobro::class );
        $arrResult = $cobrosRepository->findAll();

        $pagosRepository = $em->getRepository( Pagos::class );
        $pagosG = $pagosRepository->findAll();


        // Calcula la suma de los montos de los cobros de los alumnos
        foreach ($pagosG as $pago) {
            $arrResult[] = $pago;
        }

        return new JsonResponse($arrResult);
    }
}
