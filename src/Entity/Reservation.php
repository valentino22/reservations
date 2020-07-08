<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $product;

    /**
     * @ORM\Column(type="integer")
     */
    private $base_price;

    /**
     * @ORM\Column(type="integer")
     */
    private $final_price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getBasePrice(): ?int
    {
        return $this->base_price;
    }

    public function setBasePrice(int $base_price): self
    {
        $this->base_price = $base_price;

        return $this;
    }

    public function getFinalPrice(): ?int
    {
        return $this->final_price;
    }

    public function setFinalPrice(int $final_price): self
    {
        $this->final_price = $final_price;

        return $this;
    }
}
