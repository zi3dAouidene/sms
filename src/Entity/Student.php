<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints\Unique;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Validator\Constraints\UniqueValidator;
use Symfony\Component\Validator\Constraints as Assert;

use App\Repository\StudentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 * @UniqueEntity(fields={"fn","ls","db","phone","adress","gender"})
 * 
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fn;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     */
    private $ls;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $db;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFn(): ?string
    {
        return $this->fn;
    }

    public function setFn(string $fn): self
    {
        $this->fn = $fn;

        return $this;
    }

    public function getLs(): ?string
    {
        return $this->ls;
    }

    public function setLs(string $ls): self
    {
        $this->ls = $ls;

        return $this;
    }

    public function getDb(): ?\DateTimeInterface
    {
        return $this->db;
    }

    public function setDb(?\DateTimeInterface $db): self
    {
        $this->db = $db;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(?int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }
}
