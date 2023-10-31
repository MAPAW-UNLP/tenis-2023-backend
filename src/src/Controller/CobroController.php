<?php

namespace App\Controller;

use App\Entity\Cobro;
use App\Entity\Persona;
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

            $nombrePersona =  $em->getRepository( Persona ::class )->findOneById($cobro->getIdPersona())->getNombre();

           array_push($objCobros, array(
            // utilizar el atributo concepto, ya no el id de tipodeclase            
            "idPersona" => $cobro->getIdPersona(),
            "nombrePersona" => $nombrePersona,
            "idTipoClase" => $cobro->getIdTipoClase(), 
            "cantidad" => $cobro->getCantidad(), 
            "fecha" => $cs->getFormattedDate($cobro->getFecha())));
        }
        return $this->json($objCobros);
    }


    /**
     * @Route("/cobros_por_persona", name="app_Cobros_personaId", methods={"GET"})
     */
    public function getCobrosByPersonaId(
        Request $request,
        ManagerRegistry $doctrine,
        ServiceCustomService $cs
    ): Response
    {
        $personaId = $request->query->get('personaId');

        // dd($personaId);
        $em = $doctrine->getManager();

        $cobros = $em->getRepository( Cobro::class )->findPagosByPersonaId($personaId);

        $objCobros = array();
        foreach($cobros as $cobro){

           array_push($objCobros, array(
            // utilizar el atributo concepto
            "idTipoClase" => $cobro->getIdTipoClase(),  // tipo de clase es temporal, para que no rompa en el front
            "cantidad" => $cobro->getCantidad(), 
            "fecha" => $cs->getFormattedDate($cobro->getFecha())));
        }
        return $this->json($objCobros);
    }

     /**
     * @Route("/cobros", name="add_cobros", methods={"POST"})
     */
    public function addCobros(
        Request $request, 
        // ManagerRegistry $doctrine,
        ServiceCustomService $cs

         ): Response
    {

        $data = json_decode( $request->getContent());
        $idPersona = $data->idPersona;
        $cobros = $data->cobros;  // string [{idTipoClase:cantidad},{idTipoClase:cantidad}]
        $cobrosArray =  explode(',',$cobros);
        $fecha =  isset($data->fecha)? new DateTime($data->fecha) : null;
        
        foreach($cobrosArray as $cobros){
            $data = explode(':', $cobros );
            $cs->registrarCobro($idPersona,$data[0], $data[1], $fecha);
        }
    
        $resp = array(
            "rta"=> "ok",
            "detail"=> "Registro de cobro exitoso."
        );

        return $this->json(($resp));
    }
    



}
