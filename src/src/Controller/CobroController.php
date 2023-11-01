<?php

namespace App\Controller;

use App\Entity\Alumno;
use App\Entity\Cobro;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\CustomService as ServiceCustomService;
use DateTime;
use Symfony\Component\HttpFoundation\Request;


    /**
     * @Route(path="/api")
     */

class CobroController extends AbstractController
{
    /**
     * @Route("/cobro", name="app_cobro")
     */
    // public function index(): Response
    // {
    //     return $this->render('cobro/index.html.twig', [
    //         'controller_name' => 'CobroController',
    //     ]);
    // }

    
    /**
     * @Route("/cobros", name="get_cobros", methods={"GET"})
     */
    public function getCobros(
        Request $request,
        ManagerRegistry $doctrine,
        ServiceCustomService $cs
    ): Response
    {

        $em = $doctrine->getManager();

        $cobros = $em->getRepository( Cobro::class )->findAll();

        $objCobros = array();
        foreach($cobros as $cobro){

           array_push($objCobros, array(
            // utilizar el atributo concepto, ya no el id de tipodeclase            
            "idAlumno" => $cobro->getAlumno()->getId(),
            "nombreAlumno" => $cobro->getAlumno()->getNombre(),
            "apellidoAlumno" => $cobro->getAlumno()->getApellido(),
            "cantidad" => $cobro->getCantidad(), 
            "fecha" => $cs->getFormattedDate($cobro->getFecha()),
            "concepto" => $cobro->getConcepto()

            ));
        }
        return $this->json($objCobros);
    }


    /**
     * @Route("/cobros_por_alumno", name="app_Cobros_alumnoId", methods={"GET"})
    */
    public function getCobrosByPersonaId(
        Request $request,
        ManagerRegistry $doctrine,
        ServiceCustomService $cs
    ): Response
    {
        $alumnoId = $request->query->get('alumnoId');

        $em = $doctrine->getManager();

        $cobros = $em->getRepository( Cobro::class )->findBy(['alumno' => $alumnoId]);

        $objCobros = array();
        foreach($cobros as $cobro){

           array_push($objCobros, array(
            // utilizar el atributo concepto
            "concepto" => $cobro->getConcepto(), 
            "cantidad" => $cobro->getCantidad(), 
            "fecha" => $cs->getFormattedDate($cobro->getFecha())
            ));
        }
        return $this->json($objCobros);
    }

    /**
     * @Route("/cobrosAlumno", name="add_cobrosAlumno", methods={"POST"})
    */
    public function addCobrosAlumno(
        Request $request, 
        ServiceCustomService $cs
        ): Response
    {

        $data = json_decode( $request->getContent());
        $idAlumno = $data->idAlumno;
        $cobros = $data->cobros;
        $cobrosArray =  explode(',',$cobros);
        $fecha =  isset($data->fecha)? new DateTime($data->fecha) : null;
        
        foreach($cobrosArray as $cobros){
            $data = explode(':', $cobros );
            $cs->registrarCobroAlumno($idAlumno,$data[0], $data[1], $fecha);
        }
    
        $resp = array(
            "rta"=> "ok",
            "detail"=> "Registro de cobro al alumno exitoso."
        );

        return $this->json(($resp));
    }
    



}
