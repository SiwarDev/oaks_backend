<?php

namespace App\Entity;

use App\Repository\CompanyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
#[ApiResource]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $account_number = null;

    #[ORM\Column(length: 255)]
    private ?string $legal_Name = null;

    #[ORM\Column(length: 255)]
    private ?string $uid = null;

    #[ORM\Column(length: 255)]
    private ?string $buisness_description = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $phone_Number = null;

    #[ORM\Column(length: 255)]
    private ?string $website_link = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $incorporation = null;

    #[ORM\Column(length: 255)]
    private ?string $main_contact_person = null;

    #[ORM\Column(length: 255)]
    private ?string $email_main_contact_person = null;

    #[ORM\Column(length: 255)]
    private ?string $first_phone_number_main_contact_person = null;

    #[ORM\Column(length: 255)]
    private ?string $second_phone_number_main_contact_person = null;

    #[ORM\Column(length: 255)]
    private ?string $buisness_type = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updated_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAccountNumber(): ?string
    {
        return $this->account_number;
    }

    public function setAccountNumber(string $account_number): self
    {
        $this->account_number = $account_number;

        return $this;
    }

    public function getLegalName(): ?string
    {
        return $this->legal_Name;
    }

    public function setLegalName(string $legal_Name): self
    {
        $this->legal_Name = $legal_Name;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    public function getBuisnessDescription(): ?string
    {
        return $this->buisness_description;
    }

    public function setBuisnessDescription(string $buisness_description): self
    {
        $this->buisness_description = $buisness_description;

        return $this;
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

    public function getPhoneNumber(): ?string
    {
        return $this->phone_Number;
    }

    public function setPhoneNumber(string $phone_Number): self
    {
        $this->phone_Number = $phone_Number;

        return $this;
    }

    public function getWebsiteLink(): ?string
    {
        return $this->website_link;
    }

    public function setWebsiteLink(string $website_link): self
    {
        $this->website_link = $website_link;

        return $this;
    }

    public function getIncorporation(): ?\DateTimeInterface
    {
        return $this->incorporation;
    }

    public function setIncorporation(\DateTimeInterface $incorporation): self
    {
        $this->incorporation = $incorporation;

        return $this;
    }

    public function getMainContactPerson(): ?string
    {
        return $this->main_contact_person;
    }

    public function setMainContactPerson(string $main_contact_person): self
    {
        $this->main_contact_person = $main_contact_person;

        return $this;
    }

    public function getEmailMainContactPerson(): ?string
    {
        return $this->email_main_contact_person;
    }

    public function setEmailMainContactPerson(string $email_main_contact_person): self
    {
        $this->email_main_contact_person = $email_main_contact_person;

        return $this;
    }

    public function getFirstPhoneNumberMainContactPerson(): ?string
    {
        return $this->first_phone_number_main_contact_person;
    }

    public function setFirstPhoneNumberMainContactPerson(string $first_phone_number_main_contact_person): self
    {
        $this->first_phone_number_main_contact_person = $first_phone_number_main_contact_person;

        return $this;
    }

    public function getSecondPhoneNumberMainContactPerson(): ?string
    {
        return $this->second_phone_number_main_contact_person;
    }

    public function setSecondPhoneNumberMainContactPerson(string $second_phone_number_main_contact_person): self
    {
        $this->second_phone_number_main_contact_person = $second_phone_number_main_contact_person;

        return $this;
    }

    public function getBuisnessType(): ?string
    {
        return $this->buisness_type;
    }

    public function setBuisnessType(string $buisness_type): self
    {
        $this->buisness_type = $buisness_type;

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
}
