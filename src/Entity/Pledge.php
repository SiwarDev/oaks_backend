<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PledgeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PledgeRepository::class)]
#[ApiResource]
class Pledge
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $value = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(length: 255)]
    private ?string $prior_status = null;

    #[ORM\Column]
    private ?bool $is_added_by_admin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeImmutable $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getPriorStatus(): ?string
    {
        return $this->prior_status;
    }

    public function setPriorStatus(string $prior_status): self
    {
        $this->prior_status = $prior_status;

        return $this;
    }

    public function isIsAddedByAdmin(): ?bool
    {
        return $this->is_added_by_admin;
    }

    public function setIsAddedByAdmin(bool $is_added_by_admin): self
    {
        $this->is_added_by_admin = $is_added_by_admin;

        return $this;
    }
}
