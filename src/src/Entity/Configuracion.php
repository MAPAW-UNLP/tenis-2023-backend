<?php

namespace App\Entity;

use App\Repository\TipoClaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoClaseRepository::class)
 */
class Configuracion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $precio;

    /**
     * @ORM\OneToMany(targetEntity=Clases::class, mappedBy="tipoClase")
     */
    private $clases;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nombre_tipo;

    public function __construct()
    {
        $this->clases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return Collection<int, Clases>
     */
    public function getClases(): Collection
    {
        return $this->clases;
    }

    public function addClase(Clases $clase): self
    {
        if (!$this->clases->contains($clase)) {
            $this->clases[] = $clase;
            $clase->setTipoClase($this);
        }

        return $this;
    }

    public function removeClase(Clases $clase): self
    {
        if ($this->clases->removeElement($clase)) {
            // set the owning side to null (unless already changed)
            if ($clase->getTipoClase() === $this) {
                $clase->setTipoClase(null);
            }
        }

        return $this;
    }

    public function getNombreTipo(): ?string
    {
        return $this->nombre_tipo;
    }

    public function setNombreTipo(string $nombreTipo): self
    {
        $this->nombre_tipo = $nombreTipo;

        return $this;
    }
}
