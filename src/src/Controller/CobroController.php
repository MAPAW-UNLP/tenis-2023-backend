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
            "idAlumno" => $cobro->getAlumno() ? $cobro->getAlumno()->getId() : null,
            "nombreAlumno" => $cobro->getAlumno() ? $cobro->getAlumno()->getNombre() : "",
            "apellidoAlumno" => $cobro->getAlumno() ? $cobro->getAlumno()->getApellido() : "",
            "monto" => $cobro->getMonto(), // monto
            "fecha" => $cs->getFormattedDate($cobro->getFecha()),
            "concepto" => $cobro->getConcepto(),
            "descripcion" => $cobro->getDescripcion() 
            ));
        }
        return $this->json($objCobros);
    }


    /**
     * @Route("/cobros_por_alumno", name="app_Cobros_alumnoId", methods={"GET"})
    */
    public function getCobrosByAlumnoId(
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
            "monto" => $cobro->getMonto(), // = monto
            'descripcion' => $cobro->getDescripcion(),
            "fecha" => $cs->getFormattedDate($cobro->getFecha())
            ));
        }
        return $this->json($objCobros);
    }

     /**
     * @Route("/cobros", name="add_cobros", methods={"POST"})
     */
    public function addCobros(
        Request $request, 
        ServiceCustomService $cs
        ): Response
    {

        $data = json_decode( $request->getContent());
        $descripcion = $data->descripcion;
        $pagos = $data->pagos;
        $pagosArray =  explode(',',$pagos);
        $fecha =  isset($data->fecha)? new DateTime($data->fecha) : null;
        
        foreach($pagosArray as $pago){
            $data = explode(':', $pago );
            //data[0] motivo, data[1] = monto
            $cs->registrarCobro($data[0], $data[1], $descripcion,$fecha);
        }
    
        $resp = array(
            "rta"=> "ok",
            "detail"=> "Registro de crobo exitoso."
        );

        return $this->json(($resp));
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
        $concepto = $data->concepto;
        $descripcion = $data->descripcion;
        $cobrosArray =  explode(',',$cobros);
        $fecha =  isset($data->fecha)? new DateTime($data->fecha) : null;
        
        foreach($cobrosArray as $cobros){
            $data = explode(':', $cobros );
            $cs->registrarCobroAlumno($idAlumno,$data[0], $data[1], $concepto, $descripcion,$fecha);
        }
    
        $resp = array(
            "rta"=> "ok",
            "detail"=> "Registro de cobro al alumno exitoso."
        );

        return $this->json(($resp));
    }
    



}
