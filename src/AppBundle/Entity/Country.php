<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 * @ORM\Table(name="countries", options={"collate"="utf8_polish_ci", "charset"="utf8"}) 
 * @ORM\HasLifecycleCallbacks
 */
class Country {
    
    /**
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string")
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
    
    /**
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $updateDate;
    
    /**
     * @ORM\OneToMany(targetEntity="Brewery", mappedBy="country")
     */
    protected $breweries;

    public function __construct()
    {
        $this->breweries = new ArrayCollection();
    }
    
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

    public function getUpdateDate() {
        return $this->updateDate;
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

    public function setUpdateDate($updateDate) {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preSave(){
        
        if(null == $this->createDate){
            $this->createDate = new \DateTime();
        }
        $this->updateDate = new \DateTime();
    }
    

    /**
     * Add breweries
     *
     * @param \AppBundle\Entity\Brewery $breweries
     * @return Country
     */
    public function addBrewery(\AppBundle\Entity\Brewery $breweries)
    {
        $this->breweries[] = $breweries;

        return $this;
    }

    /**
     * Remove breweries
     *
     * @param \AppBundle\Entity\Brewery $breweries
     */
    public function removeBrewery(\AppBundle\Entity\Brewery $breweries)
    {
        $this->breweries->removeElement($breweries);
    }

    /**
     * Get breweries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBreweries()
    {
        return $this->breweries;
    }
}
