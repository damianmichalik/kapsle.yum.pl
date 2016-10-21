<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="subscribers", options={"collate"="utf8_polish_ci", "charset"="utf8"})
 */
class Subscriber
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     * @Assert\NotBlank
     * @Assert\Email
     */
    private $email;

    /**
     *
     * @ORM\Column(type="string", length=128)
     * @Assert\NotBlank
     */
    private $name;

    /**
     *
     * @ORM\Column(type="string", length=20, nullable=true, name="action_token")
     */
    private $actionToken;

    /**
     *
     * @ORM\Column(type="boolean", options={"default" = 0})
     */
    private $confirmed;

    /**
     *
     * @ORM\Column(type="datetime", name="register_date")
     */
    private $registerDate;

    public function getId()
    {
        return $this->id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getActionToken()
    {
        return $this->actionToken;
    }

    public function getConfirmed()
    {
        return $this->confirmed;
    }

    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function setActionToken($actionToken)
    {
        $this->actionToken = $actionToken;

        return $this;
    }

    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }
}
