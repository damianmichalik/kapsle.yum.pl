<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="configuration", options={"collate"="utf8_polish_ci", "charset"="utf8"})
 */
class Configuration
{

    /**
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer");
     * @ORM\Id
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $key;

    /**
     * @ORM\Column(type="text")
     */
    private $value;

    public function getId()
    {
        return $this->id;
    }

    public function getKey()
    {
        return $this->key;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
