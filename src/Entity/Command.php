<?php

namespace App\Entity;

use App\Repository\CommandRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandRepository::class)
 */
class Command
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity=Article::class)
     */
    private $articleName;

    /**
     * @ORM\ManyToOne(targetEntity=Orders::class, inversedBy="commands")
     * @ORM\JoinColumn(nullable=false)
     */
    private $orderNumber;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getArticleName(): ?Article
    {
        return $this->articleName;
    }

    public function setArticleName(?Article $articleName): self
    {
        $this->articleName = $articleName;

        return $this;
    }

    public function getOrderNumber(): ?Orders
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?Orders $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }
}
