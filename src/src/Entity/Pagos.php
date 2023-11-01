<?php

namespace App\Entity;

use App\Repository\PagosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PagosRepository::class)
 */
class Pagos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idPersona;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idTipoClase;

    /**
     * @ORM\Column(type="integer")
     */
    private $cantidad;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $motivo;

    /**
     * @ORM\ManyToOne(targetEntity="Profesor", inversedBy="pagos")
     * @ORM\JoinColumn(name="id", referencedColumnName="id", nullable=true)
     */
    private $profesor;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdPersona(): ?int
    {
        return $this->idPersona;
    }

    public function setIdPersona(int $idPersona): self
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    public function getIdTipoClase(): ?int
    {
        return $this->idTipoClase;
    }

    public function setIdTipoClase(int $idTipoClase): self
    {
        $this->idTipoClase = $idTipoClase;

        return $this;
    }

    public function getCantidad(): ?int
    {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }


    public function getProfesor(): ?Profesor
    {
        return $this->profesor;
    }

    public function setProfesor(?Profesor $profesor): self
    {
        $this->profesor = $profesor;

        return $this;
    }


}
