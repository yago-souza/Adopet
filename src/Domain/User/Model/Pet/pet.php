<?php

namespace Alura\Pdo\Domain\Pet\Model;

use DateTimeImmutable;

class Pet
//Yagao adicionei só as que fazem sentido, mas assim eu fiquei pensando se adicionava ou não o birthdate, mas adicionei.
{
    private ?int $id;
    private string $name;
    private string $species;
    private string $gender;
    private DateTimeImmutable $birthDate;
    private string $color;
    private string $description;

    public function __construct(
        ?int $id,
        string $name,
        string $species,
        string $gender,
        DateTimeImmutable $birthDate,
        string $color,
        string $description
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->species = $species;
        $this->gender = $gender;
        $this->birthDate = $birthDate;
        $this->color = $color;
        $this->description = $description;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getBirthDate(): DateTimeImmutable
    {
        return $this->birthDate;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSpecies(string $species): void
    {
        $this->species = $species;
    }

    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }

    public function setBirthDate(DateTimeImmutable $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
