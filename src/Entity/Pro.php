<?php

namespace App\Entity;

use App\Repository\ProRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=ProRepository::class)
 */
class Pro implements UserInterface 
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

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
    public function getRoles(){
        return [
            'ROLE_USER'
        ];
     }

    public function getSalt(){}
    public function eraseCredentials(){}
    public function serialize(){
        return serialize([
            $this->id,
            $this->username,
            $this->password,
        ]);
    }
    public function unserialize($string){
        list(
            $this->id,
            $this->username,
            $this->password,
        )= unserialize($string, ['allowed_classes' => false]);
    }

}
