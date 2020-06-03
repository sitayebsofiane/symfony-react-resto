<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProduitRepository;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("produit:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups("produit:read")
     */
    private $nom;

    /**
     * @ORM\Column(type="integer")
     * @Groups("produit:read")
     */
    private $dureeConcervation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDureeConcervation(): ?int
    {
        return $this->dureeConcervation;
    }

    public function setDureeConcervation(int $dureeConcervation): self
    {
        $this->dureeConcervation = $dureeConcervation;

        return $this;
    }
}
