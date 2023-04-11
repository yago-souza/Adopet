<?php

namespace Alura\Pdo\Domain\Model;

class User
{
    private ?int $id;
    private $name;
    private $email;
    private $password;
    private $about;
    private $profilePicture;

    public function __construct(
        ?int $id,
        string $name,
        string $email,
        string $password,
        string $about,
        string $profilePicture)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->about = $about;
        $this->profilePicture = $profilePicture;
    }

    public function setProfilePicture($profilePicture)
    {
        $this->profilePicture = $profilePicture;
        return $this;
    }

    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getAbout(): string
    {
        return $this->about;
    }

    public function getProfilePicture(): string
    {
        return $this->profilePicture;
    }
}