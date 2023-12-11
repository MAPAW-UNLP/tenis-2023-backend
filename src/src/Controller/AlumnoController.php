<?php

namespace App\Controller;

use App\Entity\Alumno;
use App\Entity\Cobro;
use App\Entity\Configuracion;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Route(path="/api")
*/
class AlumnoController extends AbstractController
{
    
    /**
     * @Route("/alumnos", name="app_get_alumnos", methods={"GET"})
    */
    public function getAlumnos(): Response
    {   
        $alumnos = $this->getDoctrine()->getRepository( Alumno::class )->findAll();

        return $this->json($alumnos);
    }

    /**
     * @Route("/alumno", name="app_get_alumno", methods={"GET"})
    */
    public function getAlumno(Request $request, ManagerRegistry $doctrine): Response
    {
        $alumnosId = $request->query->get('alumnoId');
        $em = $doctrine->getManager();
        $alumno = $em->getRepository( Alumno::class )->findOneById($alumnosId);
        return $this->json($alumno);
    }


    /**
     * @Route("/alumno", name="app_alta_alumno", methods={"POST"})
    */
    public function addAlumno(Request $request, ManagerRegistry $doctrine,
     EntityManagerInterface $entityManager): Response
    {

        $data = json_decode( $request->getContent());
        $nombre = $data->nombre;
        $telefono = $data->telefono;
        $fecha_nac = isset($data->fechaNac) &&  strlen($data->fechaNac) > 0 ? new DateTime($data->fechaNac): null;

        $alumno = new Alumno();
        $alumno->setNombre($nombre)->setTelefono($telefono);
        $alumno -> setFechaNac($fecha_nac);

        $em = $doctrine->getManager();
        $em->persist($alumno);
        $em->flush();
      
        if ($alumno->getId() > 0){

            $resp['rta'] =  "ok";
            $resp['detail'] = "Alumno dado de alta exitosamente.";
            
            // Persiste las entidades en la base de datos
            $entityManager->persist($alumno);
            // Aplico los cambios en la base de datos
            $entityManager->flush();

        } else {
            $resp['rta'] =  "error";
            $resp['detail'] = "Se produjo un error en el alta de al alumno.";
        }

        return $this->json(($resp));
    }

    /**
     * @Route("/alumno", name="app_mod_alumno", methods={"PUT"})
    */
    public function modAlumno(Request $request, ManagerRegistry $doctrine): Response {
        $data = json_decode( $request->getContent());
        $alumnoId = $data->id;
        $resp = array();

        if ($alumnoId != null) {
            $em = $doctrine->getManager();
            $alumno = $em->getRepository( Alumno::class )->find($alumnoId);

            if ($alumno!=null){
                if (isset($data->nombre)){
                    $alumno->setNombre($data->nombre);
                }
                if (isset($data->telefono)){
                    $alumno->setTelefono($data->telefono);
                }

                $em->persist($alumno);
                $em->flush();

                $resp['rta'] =  "ok";
                $resp['detail'] = "Alumno modificado correctamente";
            } else {
                $resp['rta'] =  "error";
                $resp['detail'] = "No existe el alumno";
            }
        } else {
            $resp['rta'] =  "error";
            $resp['detail'] = "Debe proveer un id";
        }
        return $this->json($resp);
    }

    /**
     * @Route("/clases_a_favor", name="app_clases_a_favor", methods={"GET"})
    */
    public function clasesAFavorAlumno (Request $request, ManagerRegistry $doctrine): Response {
       
        $alumnoId = $request->query->get('alumnoId');        
        $em = $doctrine->getManager();
        $alumno = $em->getRepository( Alumno::class )->find($alumnoId);

        if (!$alumno) {
            return new JsonResponse(['error' => 'Alumno no encontrado'], 404);
        }


        $query = $em->createQueryBuilder();
        $query 
        ->select('c')
        ->from(Cobro::class, 'c')
        ->where('c.alumno = :alumnoId')
        ->andWhere('c.idTipoClase = :tipoClaseValor')
        ->setParameter('alumnoId', strval($alumnoId))
        ->setParameter('tipoClaseValor', 1) // individual
        ->orderBy('c.fecha', 'DESC');

        $query2 = $em->createQueryBuilder();
        $query2 
        ->select('c')
        ->from(Cobro::class, 'c')
        ->where('c.alumno = :alumnoId')
        ->andWhere('c.idTipoClase = :tipoClaseValor')
        ->setParameter('alumnoId', strval($alumnoId))
        ->setParameter('tipoClaseValor', 2) // grupal
        ->orderBy('c.fecha', 'DESC');

        $cobrosAlumnoT1 = $query->getQuery()->getResult();
        $cobrosAlumnoT2 = $query2->getQuery()->getResult();

        $tipoClaseUno = $this->getDoctrine()->getRepository(Configuracion::class)->findOneBy(['$nombreTipo' => 'individual']); // individual
        $precioTipoClaseUno = $tipoClaseUno->getPrecio();
        $tipoClaseDos = $this->getDoctrine()->getRepository(Configuracion::class)->find(['$nombreTipo' => 'grupal']); // grupal
        $precioTipoClaseDos = $tipoClaseDos->getPrecio();

        //Se calcula el número de clases pagadas dividiendo el total pagado entre el precio por cada tipo de clase.
        // Si $clasesTUno/$clasesTUno es positivo significa que tiene clases a favor; si es negativo, significa que debe clases.
        $clasesTUno = 0;
        $clasesTDos = 0;
        if($tipoClaseUno){
            $clasesTUno = ((count($cobrosAlumnoT1) * $precioTipoClaseUno) / $precioTipoClaseUno) - count($cobrosAlumnoT1);      
        }
        if($tipoClaseDos){
            $clasesTDos = ((count($cobrosAlumnoT2) * $precioTipoClaseDos) / $precioTipoClaseDos) - count($cobrosAlumnoT2);
        }

        $resp = [
            'nombre_alumno' => $alumno->getNombre(),
            'clases_Tipo1' => $clasesTUno,
            'clases_Tipo2' => $clasesTDos,
        ];

        return new JsonResponse($resp);


    }




}
