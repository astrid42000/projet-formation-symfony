<?php

namespace App\Entity;

use App\Repository\ModeleRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ModeleRepository::class)
 */
class Modele
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intituleModele;

    /**
     * @ORM\ManyToOne(targetEntity=Marque::class, inversedBy="modele")
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntituleModele(): ?string
    {
        return $this->intituleModele;
    }

    public function setIntituleModele(string $intituleModele): self
    {
        $this->intituleModele = $intituleModele;

        return $this;
    }

    public function getMarque(): ?Marque
    {
        return $this->marque;
    }

    public function setMarque(?Marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
