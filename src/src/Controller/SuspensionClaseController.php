<?php

namespace App\Controller;

use App\Entity\SuspensionClase;
use App\Repository\ReservaRepository;
use App\Repository\SuspensionClaseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route(path="/api")
 */
class SuspensionClaseController extends AbstractController
{
    /**
     * @Route("/suspender-clase", name="app_suspension_clase", methods={"POST"})
     */
    public function storeSuspenderClase(Request $request, SuspensionClaseRepository $suspensionClaseRepository, ReservaRepository $reservaRepository): Response
    {
        $data = json_decode($request->getContent(), true);
        // TODO: cambiar 1 por usuario logueado del momento.
        $buscarReserva = $reservaRepository->findReservasProfesorByDateAndTime(1, $data['fecha'], $data['hora']);
        if ($buscarReserva != null) {

            $claseSuspendida = $suspensionClaseRepository->findSuspensionClaseByFechaHoraProfesor($data['fecha'], $data['hora'], 1);

            if ($claseSuspendida == null) {
                $suspensionClase = new SuspensionClase();
                $suspensionClase->setFecha(new \DateTime($data['fecha']));
                $suspensionClase->setHora(new \DateTime($data['hora']));
                // TODO: cambiar 1 por usuario logueado del momento.
                $suspensionClase->setProfesorId(1);
                $suspensionClase->setEstadoId(1);
                $suspensionClase->setReservaId($buscarReserva[0]->getId());
                $suspensionClase->setMotivo($data['motivo']);
                $suspensionClaseRepository->add($suspensionClase, true);

                return $this->json([
                    'message' => 'Se ha enviado al administrador un pedido de suspensión de clase.',
                    'data' => $data,
                ], 201);
            } else {
                $data['profesor_id'] = $claseSuspendida[0]->getProfesorId();
                $data['estado_id'] = $claseSuspendida[0]->getEstadoId();
                return $this->json([
                    'message' => 'Ya existe un pedido de suspensión de clase para el horario ingresado.',
                    'data' => $data,
                ], 409);
            }
        } else {
            // Retornar rango de posibles horarios de reserva.
            return $this->json([
                'message' => 'No existe una reserva para el horario ingresado.',
                'data' => $data,
            ], 404);
        }
    }

    /**
     * @Route("/eliminar-suspender-clase/{id}", name="app_suspension_clase_show", methods={"DELETE"})
     */
    public function deleteSuspenderClase($id, SuspensionClaseRepository $suspensionClaseRepository): Response
    {
        $claseSuspendida = $suspensionClaseRepository->findSuspensionClaseById($id);

        if ($claseSuspendida) {
            if ($claseSuspendida[0]->getEstadoId() == 1) {
                $suspensionClaseRepository->remove($claseSuspendida[0], true);
                return $this->json([
                    'message' => 'Se ha eliminado el pedido de suspensión de clase.',
                    'data' => $claseSuspendida,
                ], 200);
            } else {
                return $this->json([
                    'message' => 'No se puede eliminar el pedido de suspensión de clase. Ya que no se encuentra en estado pendiente.',
                    'data' => $claseSuspendida,
                ], 409);
            }
        } else {
            return $this->json([
                'message' => 'No existe el pedido de suspensión de clase.',
                'data' => $claseSuspendida,
            ], 404);
        }
    }

    /**
     * @Route("/mis-solicitudes/{profesor_id}", name="app_suspension_clase_index", methods={"GET"})
     */
    public function indexMisSolicitudes($profesor_id, SuspensionClaseRepository $suspensionClaseRepository): Response
    {
        $solicitudes = $suspensionClaseRepository->findSuspensionesClasesByProfesorId($profesor_id);
        if ($solicitudes) {
            return $this->json([
                'message' => 'Se han encontrado las siguientes solicitudes de suspensión de clase.',
                'data' => $solicitudes,
            ], 200);
        } else {
            return $this->json([
                'message' => 'No se han encontrado solicitudes de suspensión de clase.',
                'data' => $solicitudes,
            ], 404);
        }
    }

    /**
     * @Route("/aprobar-solicitud/{suspension_clase_id}", name="app_aprobar_solicitud", methods={"PUT"})
     */
    public function aprobarSolicitud($suspension_clase_id, SuspensionClaseRepository $suspensionClaseRepository, ReservaRepository $reservaRepository): Response
    {
        $solicitud = $suspensionClaseRepository->findSuspensionClaseById($suspension_clase_id);
        if ($solicitud) {
            // Pendiente = 1
            if ($solicitud[0]->getEstadoId() == 1) {
                // Aprobado = 2
                $solicitud[0]->setEstadoId(2);
                $suspensionClaseRepository->edit($solicitud[0], true);
                // Cuando se aprueba la suspensión de clase el estado de la reserva es CANCELADO
                $reserva = $reservaRepository->findOneById($solicitud[0]->getReservaId());
                $reserva->setEstadoId(1);
                $reservaRepository->edit($reserva, true);

                return $this->json([
                    'message' => 'Se ha aprobado la solicitud de suspensión de clase.',
                    'data' => $solicitud,
                ], 200);
            } else {
                return $this->json([
                    'message' => 'No se puede aprobar la solicitud de suspensión de clase. Ya que no se encuentra en estado pendiente.',
                    'data' => $solicitud,
                ], 409);
            }
        } else {
            return $this->json([
                'message' => 'No existe la solicitud de suspensión de clase.',
                'data' => $solicitud,
            ], 404);
        }
    }
}
