<?php

namespace App\Controller;

use App\Entity\Configuracion;
use App\Entity\Profesor;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
 


/**
    * @Route(path="/api")
*/


class ConfiguracionController extends AbstractController
{

    /**
     * @Route("/all_configuracion", name="app_get_configuracion", methods={"GET"})
    */

    public function getAllConfiguracion(): Response {
        
        $config = $this->getDoctrine()->getRepository( Configuracion::class )->findAll();

        return $this->json($config);

    }

    /**
     * @Route("/config_tipos_clases", name="app_get_tipo_clase", methods={"GET"})
    */    
    public function getMontoPorTipo(Request $request): Response {

        $nombreTipoClase = strtolower($request->query->get('nombreTipoClase')); // asumiendo que en la db se guarda en minuscula el nombre del tipo

        $tipoClase = $this->getDoctrine()->getRepository(Configuracion::class)->findOneBy(['nombreTipo' => $nombreTipoClase]);

        $responseData = [
            'Tipo de clase' => $tipoClase->getNombreTipo(),
            'Valor' => $tipoClase->getPrecio(),
        ];
        return $this->json($responseData);
    }

    /**
     * @Route("/mod_configuracion", name="app_mod_config", methods={"PUT"})
    */  
    public function modConfiguracion (Request $request, ManagerRegistry $doctrine): Response {
    
        $data = json_decode( $request->getContent());
        $nombreTipoClase = $data->nombreTipo;
        $respData = array();

        if($nombreTipoClase != null){
            $em = $doctrine->getManager();
            $tipoClase = $em->getRepository( Configuracion::class )->findOneBy(['nombreTipo' => $nombreTipoClase]);
            
            if($tipoClase != null){
                if(isset($data->nombreTipo)){
                    $tipoClase->setNombreTipo($data->nombreTipo);
                }
                if(isset($data->precio)){
                    $tipoClase->setPrecio($data->precio);
                }
                $em->persist($tipoClase);
                $em->flush();
                $respData['rta'] =  "ok";
                $respData['detail'] = "Datos modificados correctamente";
            }else{
                $respData['rta'] =  "error";
                $respData['detail'] = "No existe el tipo de clase";
            }
        
        }else{
            $respData['rta'] =  "error";
            $respData['detail'] = "Debe proveer un id";
        }


        return $this->json($respData);
    
    }

    /**
     * @Route("/list_precio_profesores", name="app_list_precio", methods={"GET"})
    */  
    public function getProfesoresPrecio(ManagerRegistry $doctrine): Response{
        $em = $doctrine->getManager();

        $profesores = $em->getRepository( Profesor::class )->findAll();

        $objProfesores = array();
        foreach($profesores as $profesor){
            array_push($objProfesores, array(
                "nombre" => $profesor->getNombre(),
                "precio" => $profesor->getPrecioPorHora(),
            ));
        
        }
        return $this->json($objProfesores);

    }




}   
