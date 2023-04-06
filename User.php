<?php

namespace Adopet;

class User
{
    private $name;
    private $email;
    private $password;
    private $about;
    private $profilePicture;

    public function __construct(string $name,
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
}