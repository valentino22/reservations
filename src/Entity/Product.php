<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $base_price;

    /**
     * @ORM\Column(type="integer")
     */
    private $final_prices_sum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function getFinalPricesSum(): ?int
    {
        return $this->final_prices_sum;
    }

    public function setFinalPricesSum(int $final_prices_sum): self
    {
        $this->final_prices_sum = $final_prices_sum;

        return $this;
    }
}
