<?php

namespace App\Entity;
use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ApiResource]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $roles = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $auth_code = null;

    #[ORM\Column(length: 255)]
    private ?string $first_name = null;

    #[ORM\Column(length: 255)]
    private ?string $last_name = null;

    #[ORM\Column(length: 255)]
    private ?string $mobile_number = null;

    #[ORM\Column]
    private ?int $created_by_id = null;

    #[ORM\Column]
    private ?int $updated_by_id = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    #[ORM\Column(length: 255)]
    private ?string $token = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $token_expire_at = null;

    #[ORM\Column(length: 255)]
    private ?string $avatar = null;

    #[ORM\Column]
    private ?bool $is_active = false;

    #[ORM\Column]
    private ?bool $accept_privacy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getAuthCode(): ?string
    {
        return $this->auth_code;
    }

    public function setAuthCode(string $auth_code): self
    {
        $this->auth_code = $auth_code;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->first_name;
    }

    public function setFirstName(string $first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->last_name;
    }

    public function setLastName(string $last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    public function getMobileNumber(): ?string
    {
        return $this->mobile_number;
    }

    public function setMobileNumber(string $mobile_number): self
    {
        $this->mobile_number = $mobile_number;

        return $this;
    }

    public function getCreatedById(): ?int
    {
        return $this->created_by_id;
    }

    public function setCreatedById(int $created_by_id): self
    {
        $this->created_by_id = $created_by_id;

        return $this;
    }

    public function getUpdatedById(): ?int
    {
        return $this->updated_by_id;
    }

    public function setUpdatedById(int $updated_by_id): self
    {
        $this->updated_by_id = $updated_by_id;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getTokenExpireAt(): ?\DateTimeImmutable
    {
        return $this->token_expire_at;
    }

    public function setTokenExpireAt(\DateTimeImmutable $token_expire_at): self
    {
        $this->token_expire_at = $token_expire_at;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function isAcceptPrivacy(): ?bool
    {
        return $this->accept_privacy;
    }

    public function setAcceptPrivacy(bool $accept_privacy): self
    {
        $this->accept_privacy = $accept_privacy;

        return $this;
    }
}
