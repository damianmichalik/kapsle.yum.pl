<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CapRepository")
 * @ORM\Table(name="caps", options={"collate"="utf8_polish_ci", "charset"="utf8"}) 
 */
class Cap {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=120)
     * @Assert\NotBlank
     * @Assert\Length(
     *      max = 120
     * )
     */
    private $name;
    
    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=120, unique=true)
     */
    private $slug;
    
    /**
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $createDate;
    
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function getCreateDate() {
        return $this->createDate;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
        return $this;
    }

    public function setCreateDate($createDate) {
        $this->createDate = $createDate;
        return $this;
    }


    
}
