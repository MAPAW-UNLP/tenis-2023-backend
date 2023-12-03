<?php

namespace App\Controller;

use PHPUnit\Util\Json;
use App\Entity\HorarioDisponible;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\HorarioDisponibleRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route(path="/api")
 */
class HorarioDisponibleController extends AbstractController
{
    /**
     * @Route("/horario-disponible", name="app_horario_disponible", methods={"GET"})
     */
    public function index(HorarioDisponibleRepository $horarioDisponibleRepository): Response
    {
        $profesor_id = 1;
        $horariosDisponibles = $horarioDisponibleRepository->getHorariosDisponiblesByProfesorId($profesor_id);

        if ($horariosDisponibles) {
            return $this->json([
                'message' => 'Horarios disponibles encontrados',
                'data' => $horariosDisponibles,
            ], 200);
        } else {
            return $this->json([
                'message' => 'No hay horarios disponibles',
            ], 404);
        }
    }

    /**
     * @Route("/horario-disponible", name="app_horario_disponible_crear", methods={"POST"})
     */
    public function storeHorarioDisponible(Request $request, HorarioDisponibleRepository $horarioDisponibleRepository): Response
    {
        $data = json_decode($request->getContent(), true);

        $fecha_ini = new \DateTime($data['fecha_ini']);
        $fecha_fin = new \DateTime($data['fecha_fin']);
        $hora_ini = new \DateTime($data['hora_ini']);
        $hora_fin = new \DateTime($data['hora_fin']);
        $profesor_id = 1;

        if ($fecha_fin > $fecha_ini) {
            while ($fecha_ini <= $fecha_fin) {
                $horarioDisponible = new HorarioDisponible();
                $horarioDisponible->setFechaIni($fecha_ini);
                $horarioDisponible->setFechaFin($fecha_fin);
                $horarioDisponible->setHoraIni($hora_ini);
                $horarioDisponible->setHoraFin($hora_fin);
                $horarioDisponible->setProfesorId($profesor_id);

                $horarioDisponibleRepository->add($horarioDisponible, true);

                if ($data['repite'] == 'Todas las semanas') {
                    $fecha_ini->add(new \DateInterval('P1W'));
                } elseif ($data['repite'] == 'Todos los meses') {
                    $fecha_ini->add(new \DateInterval('P1M'));
                } else {
                    $fecha_ini->add(new \DateInterval('P1D'));
                }
            }

            return new JsonResponse(['data' => [
                'message' => 'Horario disponible creado correctamente',
            ]], 201);
        } else {
            $horarioDisponible = new HorarioDisponible();
            $horarioDisponible->setFechaIni($fecha_ini);
            $horarioDisponible->setFechaFin($fecha_fin);
            $horarioDisponible->setHoraIni($hora_ini);
            $horarioDisponible->setHoraFin($hora_fin);
            $horarioDisponible->setProfesorId($profesor_id);

            $horarioDisponibleRepository->add($horarioDisponible, true);

            return new JsonResponse(['data' => [
                'message' => 'Horario disponible creado correctamente',
                'horario_disponible' => $data
            ]], 201);
        }
    }

    /**
     * @Route("/horario-disponible/{id}", name="app_horario_disponible_delete", methods={"DELETE"})
     */
    public function deleteHorarioDisponible(Request $request, HorarioDisponibleRepository $horarioDisponibleRepository, $id): Response
    {
        $horarioDisponible = $horarioDisponibleRepository->find($id);

        if ($horarioDisponible) {
            $horarioDisponibleRepository->remove($horarioDisponible, true);

            return new JsonResponse(['data' => [
                'message' => 'Horario disponible eliminado correctamente',
            ]], 201);
        } else {
            return new JsonResponse(['data' => [
                'message' => 'Horario disponible no encontrado',
            ]], 404);
        }
    }
}
