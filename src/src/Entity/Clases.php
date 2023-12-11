<?php

namespace App\Entity;

use App\Repository\ClasesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClasesRepository::class)
 */
class Clases
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $tipo;

    /**
     * @ORM\Column(type="integer")
     */
    private $importe;

    /**
     * @ORM\ManyToOne(targetEntity=Configuracion::class, inversedBy="clases")
     * @ORM\JoinColumn(name="tipo_clase_nom", referencedColumnName="nombre_tipo", nullable=true)
     */
    private $tipoClase;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getImporte(): ?int
    {
        return $this->importe;
    }

    public function setImporte(int $importe): self
    {
        $this->importe = $importe;

        return $this;
    }

    public function getTipoClase(): ?TipoClase
    {
        return $this->tipoClase;
    }

    public function setTipoClase(?TipoClase $tipoClase): self
    {
        $this->tipoClase = $tipoClase;

        return $this;
    }
}
