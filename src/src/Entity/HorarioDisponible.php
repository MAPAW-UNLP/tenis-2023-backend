<?php

namespace App\Entity;

use App\Repository\HorarioDisponibleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HorarioDisponibleRepository::class)
 */
class HorarioDisponible
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_ini;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha_fin;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_ini;

    /**
     * @ORM\Column(type="time")
     */
    private $hora_fin;

    /**
     * @ORM\Column(type="integer")
     */
    private $profesor_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaIni(): ?\DateTimeInterface
    {
        return $this->fecha_ini;
    }

    public function setFechaIni(\DateTimeInterface $fecha_ini): self
    {
        $this->fecha_ini = $fecha_ini;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fecha_fin;
    }

    public function setFechaFin(\DateTimeInterface $fecha_fin): self
    {
        $this->fecha_fin = $fecha_fin;

        return $this;
    }

    public function getHoraIni(): ?\DateTimeInterface
    {
        return $this->hora_ini;
    }

    public function setHoraIni(\DateTimeInterface $hora_ini): self
    {
        $this->hora_ini = $hora_ini;

        return $this;
    }

    public function getHoraFin(): ?\DateTimeInterface
    {
        return $this->hora_fin;
    }

    public function setHoraFin(\DateTimeInterface $hora_fin): self
    {
        $this->hora_fin = $hora_fin;

        return $this;
    }

    public function getProfesorId(): ?int
    {
        return $this->profesor_id;
    }

    public function setProfesorId(int $profesor_id): self
    {
        $this->profesor_id = $profesor_id;

        return $this;
    }
}
