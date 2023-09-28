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
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use App\Service\CorreoService;

class ProfesorController extends AbstractController
{
    /**
     * @Route("/profesores", name="app_profesor", methods={"GET"})
     */
    // public function index(): Response
    // {
    //     return $this->render('profesor/index.html.twig', [
    //         'controller_name' => 'ProfesorController',
    //     ]);
    // }

    // private $correoService;

    // public function __construct(CorreoService $correoService)
    // {
    //     $this->correoService = $correoService;
    // }



    public function getProfesores(): Response
    {
        $profesores = $this->getDoctrine()->getRepository( Profesor::class )->findAll();
        return $this->json($profesores);
    }

    /**
     * @Route("/profesor", name="app_personas", methods={"GET"})
     */
    public function getProfesor(Request $request, ManagerRegistry $doctrine): Response
    {
        $profesorId = $request->query->get('profesorId');
        $em = $doctrine->getManager();
        $profesor = $em->getRepository( Profesor::class )->findOneById($profesorId); // pensar en cambiar a Email
        return $this->json($profesor);
    }

    /**
     * @Route("/profesor", name="app_alta_profesor", methods={"POST"})
     */
    public function addProfesor(Request $request, ManagerRegistry $doctrine,
     EntityManagerInterface $entityManager): Response
    {

        $data = json_decode( $request->getContent());
        $nombre = $data->nombre;
        $telefono = $data->telefono;
        $email = $data->email;

        $profesor = new Profesor();
        $usuario = new Usuario();
        $profesor->setTelefono($telefono);
        $profesor->setNombre($nombre);
        $profesor->setEmail($email);

        $contrasenaAleatoria = $this->generarContrasenaAleatoria();
        // $usuario->setPassword($passwordEncoder->encodePassword($contrasenaAleatoria, 8));
        $usuario->setPassword($contrasenaAleatoria);

        $usuario->setUsername($profesor->getEmail()); // cambiar método desde el profesor
        $usuario->setProfesor($profesor); // Idem
        $profesor->setUsuario($usuario);
        // $this->correoService->enviarCorreoCreacionProfesor($email, $nombre, $password);



        $em = $doctrine->getManager();
        $em->persist($profesor);
        $em->flush();
      
        if ($profesor->getId() > 0){

            $resp['rta'] =  "ok";
            $resp['detail'] = "Persona dada de alta exitosamente.";
            
            // Persiste las entidades en la base de datos
            $entityManager->persist($usuario);
            $entityManager->persist($profesor);
            // Aplico los cambios en la base de datos
            $entityManager->flush();


        } else {
            $resp['rta'] =  "error";
            $resp['detail'] = "Se produjo un error en el alta de la persona.";
        }

        return $this->json(($resp));
    }




    private function generarContrasenaAleatoria()
    {
        $length = 12; // Longitud de la contraseña aleatoria
        $bytes = random_bytes($length);
        return base64_encode($bytes);
    }



}
